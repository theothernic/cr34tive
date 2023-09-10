<?php

    use Illuminate\Support\Facades\Route;

    Route::name('pages.')->prefix('pages')->group(function () {
        Route::get('credits', [\App\Http\Controllers\Pages\PageController::class, 'credits'])->name('credits');
    });
