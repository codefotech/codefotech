<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use App\Http\Requests\StoreUserProfileRequest;
use App\Http\Requests\StoreUserRequest;
use App\Libraries\ImageProcessing;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AuthController extends Controller
{


    public function login():View
    {
        return view('auth.login');
    }

    public function loginCheck(Request $request)
    {
        $request->validate(['email' => ['required', 'email'], 'password' => ['required']]);
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user, $request->filled('remember'));
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            } else {
                return back()->withErrors(['password' => 'The provided password is incorrect.',])->onlyInput('email');
            }
        } else {
            return back()->withErrors(['email' => 'The provided email does not match our records.',])->onlyInput('email');
        }
    }

    public function register(): View | RedirectResponse {
        try {
            return view( 'auth.register' );

        } catch ( Exception $exception ) {
            Log::error( "Error occurred in AuthController@create ({$exception->getFile()}:{$exception->getLine()}): {$exception->getMessage()}" );
            Session::flash( 'error', "Something went wrong during application data create [AC-102]" );
            return redirect()->back();
        }
    }

    public function store( StoreUserRequest $request ) {
        try {
            if ( $request->get( 'id' ) ) {
                $user = Auth::findOrFail( $request->get( 'id' ) );
            } else {
                $user = new User();
            }
            $user->name = $request->get( 'name' );
            $user->email = $request->get( 'email' );
            $user->password = Hash::make($request->get( 'password' ));
            $user->user_type = '1001';
            $user->role_id = $request->get( 'role' );
            dd($user);
            $user->save();

            Auth::login($user);
            Session::flash( 'success', 'Data save successfully!' );
            return redirect()->route( 'login' );
        } catch (Exception $exception) {
            Log::error( "Error occurred in AuthController@store ({$exception->getFile()}:{$exception->getLine()}): {$exception->getMessage()}" );
            Session::flash( 'error', "Something went wrong during application data store [AC-103]" );
            return Redirect::back()->withInput();
        }
    }

//    public function profile(Request $request)
//    {
//        $data = ['data' => Auth::user()];
//        return view( 'User::profile', $data);
//    }
//
//    public function edit (StoreUserProfileRequest $request){
//        try {
//
//            $user = User::findOrFail( $request->get( 'id' ));
//
//            // user profile picture
//            if (!empty($request->user_pic_base64)) {
//                $yearMonth = "uploads/".date("Y") . "/" . date("m") . "/";
//                $path_with_dir = config('app.upload_doc_path') . $yearMonth;
//                if (!file_exists($path_with_dir)) {
//                    mkdir($path_with_dir, 0777, true);
//                }
//                $splited = explode(',', substr($request->get('user_pic_base64'), 5), 2);
//                $imageData = $splited[1];
//                $base64ResizeImage = base64_encode(ImageProcessing::resizeBase64Image($imageData, 300, 300));
//                $base64ResizeImage = base64_decode($base64ResizeImage);
//                $user_picture_name = time(). '.' . 'jpeg';
//                file_put_contents($path_with_dir . $user_picture_name, $base64ResizeImage);
//
//                $user->image = $path_with_dir . $user_picture_name;
//            }
//
//            $user->name = $request->get( 'name' );
////            $user->email = $request->get( 'email' );
////            $user->user_type = '1';
//            $user->save();
//            Session::flash( 'success', 'Data save successfully!' );
//            return Redirect::back()->withInput();
//        } catch ( Exception $e ) {
//            Log::error( "Error occurred in AuthController@store ({$e->getFile()}:{$e->getLine()}): {$e->getMessage()}" );
//            Session::flash( 'error', "Something went wrong during application data store [UPC-103]" );
//            return Redirect::back()->withInput();
//        }
//    }


//    public function verifyEmail():View
//    {
//        return view('auth.verify-email');
//    }

//    public function twoSteps():View
//    {
//        return view('auth.two-steps');
//    }

//    public function forgotPassword():View {
//        return view('auth.forgot-password');
//    }

//    public function forgotPasswordAction(Request $request){
//        $request->validate([
//            'email' => 'required|email',
//        ]);
//
//        // Find the user by email
//        $user = User::where('email', $request->email)->first();
//
//        if ($user) {
//            $status = Password::sendResetLink(
//                $request->only('email')
//            );
//
//            return $status === Password::RESET_LINK_SENT
//                ? back()->with('status', __($status))
//                : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
//        } else {
//            // User not found
//            return back()->withErrors([
//                'email' => 'The provided email does not match our records.',
//            ])->onlyInput('email');
//        }
//
//    }

//    public function resetPassword(string $token): View
//    {
//        return view('auth.reset-password', ['token' => $token]);
//    }

//    public function resetPasswordAction(Request $request)
//    {
//        $request->validate([
//            'email' => 'required|email',
//            'password' => 'required|string|min:8',
//            'token' => 'required',
//        ]);
//
//        $status = Password::reset(
//            $request->only('email', 'password', 'token'),
//            function ($user) use ($request) {
//                $user->forceFill([
//                    'password' => Hash::make($request->password),
//                    'remember_token' => Str::random(60),
//                ])->save();
//            }
//        );
//
//        return $status === Password::PASSWORD_RESET
//            ? redirect()->route('login')->with('status', __($status))
//            : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
//    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
