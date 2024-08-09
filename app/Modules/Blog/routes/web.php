<?php

use App\Modules\Blog\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'Module' => 'Blog',
        'middleware' => ['web', 'auth']
    ],
    function () {
        Route::prefix( 'blog' )->group( function () {
            Route::match( ['get', 'post'], '/list', [BlogController::class, 'list'] )->name( 'blog.list' );
            Route::get( '/create', [BlogController::class, 'create'] )->name( 'blog.create' );
            Route::post( '/store', [BlogController::class, 'store'] )->name( 'blog.store' );
            Route::get( '/edit/{id}', [BlogController::class, 'edit'] )->name( 'blog.edit' );
        } );
    }
);
