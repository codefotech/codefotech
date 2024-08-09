<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

Route::get( '/login', [LoginController::class, 'login'] )->name( 'login' );
Route::post( 'login-check', array( LoginController::class, 'loginCheck' ) )->name( 'login.check' );
Route::get( '/register', [RegisterController::class, 'register'] )->name( 'register' );
Route::get( '/register/create', [RegisterController::class, 'create'] )->name( 'register.create' );
Route::post( '/register/store', [RegisterController::class, 'store'] )->name( 'register.store' );
Route::get( '/logout', [LogoutController::class, 'destroy'] )->name( 'logout' )->middleware('auth');


Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');
Route::post('/forgot-password/create', [ForgotPasswordController::class, 'create'])->name('forgot-password.create');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'index'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'create'])->name('password.update');



Route::get( '/verify-email', [LoginController::class, 'verifyEmail'] )->name( 'verify-email' );
Route::get( '/two-steps', [LoginController::class, 'twoSteps'] )->name( 'two-steps' );
