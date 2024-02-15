<?php

    use Illuminate\Support\Facades\Route;

    Route::name('stationery.')->prefix('stationery')->group(function () {
        Route::get('/', \App\Http\Controllers\Stationery\IndexController::class)->name('index');
        Route::get('maker/{slug}', \App\Http\Controllers\Stationery\MakerController::class)->name('maker');
    });
