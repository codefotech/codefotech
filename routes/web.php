<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Modules\Dashboard\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */


Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login-check', [LoginController::class, 'logincheck'])->name('login.check');
});

Route::get('/', [FrontendController::class, 'frontend'])->name('home');
Route::get('/home', [FrontendController::class, 'frontend'])->name('homes');




Route::get( 'logout', array( LoginController::class, 'logout' ) )->name( 'logout' );



Route::get( 'logs', array( \Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index' ) );



Route::get('/', function () {
    return view('frontend.layouts.main');
});
Route::get('/blog', function () {
    return view('frontend.layouts.blog');
});
Route::get('/blog/blog_details', function () {
    return view('frontend.layouts.blog_details');
});

