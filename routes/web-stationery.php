<?php

    use Illuminate\Support\Facades\Route;

    Route::name('stationery.')->prefix('stationery')->group(function () {
        Route::get('/', \App\Http\Controllers\Stationery\IndexController::class)->name('index');
        Route::get('maker/{slug}.html', \App\Http\Controllers\Stationery\MakerDetailController::class)->name('maker');
        Route::get('products/{slug}.html', \App\Http\Controllers\Stationery\ProductDetailController::class)->name('product');
        Route::get('products/{type}', \App\Http\Controllers\Stationery\ProductGridController::class);
    });
