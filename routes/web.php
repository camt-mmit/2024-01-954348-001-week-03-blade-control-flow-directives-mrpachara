<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProductController::class)
    ->prefix('/products')
    ->name('products.')
    ->group(static function() {
        Route::get('', 'list')->name('list');
        Route::get('/{product}', 'view')->name('view');
    });

Route::controller(CategoryController::class)
    ->prefix('/categories')
    ->name('categories.')
    ->group(static function() {
        Route::get('', 'list')->name('list');
        Route::get('/{category}', 'view')->name('view');
    });
