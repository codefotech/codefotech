<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.layouts.main');
});
Route::get('/blog', function () {
    return view('frontend.layouts.blog');
});
Route::get('/blog/blog_details', function () {
    return view('frontend.layouts.blog_details');
});


Route::get( '/login', [AuthController::class, 'login'] )->name( 'login' );
Route::post( 'login-check', array( AuthController::class, 'loginCheck' ) )->name( 'login.check' );

Route::get( '/register', [AuthController::class, 'register'] )->name( 'register' );
Route::post( '/register/store', [AuthController::class, 'store'] )->name( 'register.store' );


Route::get( '/logout', [AuthController::class, 'logout'] )->name( 'logout' )->middleware('auth');


//Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
//Route::post('/forgot-password/create', [AuthController::class, 'forgotPasswordAction'])->name('forgot-password.create');
//
//Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-password');
//Route::post('/reset-password', [AuthController::class, 'resetPasswordAction'])->name('forgot-password.update');

//Route::get( '/verify-email', [AuthController::class, 'verifyEmail'] )->name( 'verify-email' );
//Route::get( '/two-steps', [AuthController::class, 'twoSteps'] )->name( 'two-steps' );
