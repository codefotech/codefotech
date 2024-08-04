<?php

use App\Modules\Blog\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::group( array('Module' => 'Blog'), function () {
    Route::prefix( 'blog' )->group( function () {
        Route::get( '/', [BlogController::class, 'index'] )->name( 'blog.index' );
        Route::get( '/create', [BlogController::class, 'create'] )->name( 'blog.create' );
        Route::post( '/', [BlogController::class, 'store'] )->name( 'blog.store' );
        Route::get( '/{id}', [BlogController::class, 'show'] )->name( 'blog.show' );
        Route::get( '/{id}/edit', [BlogController::class, 'edit'] )->name( 'blog.edit' );
        Route::put( '/{id}', [BlogController::class, 'update'] )->name( 'blog.update' );
        Route::delete( '/{id}', [BlogController::class, 'destroy'] )->name( 'blog.destroy' );
    } );
} );
