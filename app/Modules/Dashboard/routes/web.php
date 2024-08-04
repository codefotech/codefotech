<?php

use App\Modules\Dashboard\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group( array( 'Module' => 'Dashboard' ), function () {
    Route::prefix( 'dashboard' )->group( function () {
        Route::match( array( 'get', 'post' ), '/', array( DashboardController::class, 'index' ) )->name( 'dashboard.view' );
    } );
} );
