<?php

use Illuminate\Support\Facades\Route;

    Route::name('noodles.')->prefix('noodles')->group(function () {
        Route::get('/', \App\Http\Controllers\Noodles\IndexController::class)->name('index');
    });
