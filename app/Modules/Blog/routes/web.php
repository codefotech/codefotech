<?php

use App\Modules\Blog\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::group( array( 'Module' => 'Blog' ), function () {
    Route::prefix( 'blog' )->group( function () {
        Route::get( '/', [BlogController::class, 'index'] )->name( 'blog.index' );
        Route::match( array( 'get', 'post' ), '/list', array( BlogController::class, 'list' ) )->name( 'account.list' );
        Route::get( 'create', array( BlogController::class, 'create' ) )->name( 'account.create' );
        Route::post( 'store', array( BlogController::class, 'store' ) )->name( 'account.store' );
        Route::get( 'edit/{id}', array( BlogController::class, 'edit' ) )->name( 'account.edit' );
    } );
} );
