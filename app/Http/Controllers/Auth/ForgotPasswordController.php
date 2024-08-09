<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class ForgotPasswordController extends Controller
{
    public function index():View {
        return view('auth.forgot-password');
    }

    public function create(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $status = Password::sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                ? back()->with('status', __($status))
                : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
        } else {
            // User not found
            return back()->withErrors([
                'email' => 'The provided email does not match our records.',
            ])->onlyInput('email');
        }

    }
}
