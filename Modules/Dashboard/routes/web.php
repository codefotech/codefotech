<?php

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::group( array('Module' => 'Dashboard'), function () {
    Route::prefix( 'dashboard' )->group( function () {
        Route::get( '/', array(DashboardController::class, 'index') )->name( 'dashboard.index' );
        Route::get( '/create', array(DashboardController::class, 'create') )->name( 'dashboard.create' );
        Route::post( '/', array(DashboardController::class, 'store') )->name( 'dashboard.store' );
    } );
} );