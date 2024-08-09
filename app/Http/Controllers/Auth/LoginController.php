<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Check if the password is correct
            if (Hash::check($request->password, $user->password)) {
                // Log the user in and regenerate the session
                Auth::login($user, $request->filled('remember'));
                $request->session()->regenerate();

                // Redirect to the intended page or dashboard
                return redirect()->intended('dashboard');
            } else {
                // Password does not match
                return back()->withErrors([
                    'password' => 'The provided password is incorrect.',
                ])->onlyInput('email');
            }
        } else {
            // User not found
            return back()->withErrors([
                'email' => 'The provided email does not match our records.',
            ])->onlyInput('email');
        }
    }

    public function verifyEmail(){
        return view('auth.verify-email');
    }
    public function resetPassword(){
        return view('auth.reset-password');
    }
    public function twoSteps(){
        return view('auth.two-steps');
    }
    public function forgotPassword(){
        return view('auth.forgot-password');
    }




}
