<?php
    use Illuminate\Support\Facades\Route;

    Route::prefix('stationery')->group(function () {
        Route::get('makers', [\App\Http\Controllers\Stationery\ApiResourceController::class, 'makers']);
    });
