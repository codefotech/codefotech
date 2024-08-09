<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function create(): View | RedirectResponse {
        try {
            return view( 'Register::create' );

        } catch ( Exception $exception ) {
            Log::error( "Error occurred in RegisterController@create ({$exception->getFile()}:{$exception->getLine()}): {$exception->getMessage()}" );
            Session::flash( 'error', "Something went wrong during application data create [RC-102]" );
            return redirect()->back();
        }
    }

    public function store( StoreUserRequest $request ) {
        try {
            if ( $request->get( 'id' ) ) {
                $user = User::findOrFail( $request->get( 'id' ) );
            } else {
                $user = new User();
            }
            $user->user_name = $request->get( 'user_name' );
            $user->email = $request->get( 'email' );
            $user->password = Hash::make($request->get( 'password' ));
            $user->save();

            Auth::login($user);
            Session::flash( 'success', 'Data save successfully!' );
            return redirect()->route( 'login' );
        } catch (Exception $exception) {
            Log::error( "Error occurred in RegisterController@store ({$exception->getFile()}:{$exception->getLine()}): {$exception->getMessage()}" );
            Session::flash( 'error', "Something went wrong during application data store [RC-103]" );
            return Redirect::back()->withInput();
        }
    }

}
