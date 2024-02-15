<?php

    use Illuminate\Support\Facades\Route;

    Route::name('stationery.')->prefix('stationery')->group(function () {
        Route::get('/', \App\Http\Controllers\Stationery\IndexController::class)->name('index');
    });
