<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
// Route::get('/dashboard', function () {
//     return view('backend.index');
// });
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/verify-email', function () {
    return view('auth.verify-email');
});
Route::get('/reset-password', function () {
    return view('auth.reset-password');
});
Route::get('/two-steps', function () {
    return view('auth.two-steps');
});
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});
