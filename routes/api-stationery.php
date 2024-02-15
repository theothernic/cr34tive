<?php
    use Illuminate\Support\Facades\Route;

    Route::prefix('stationery')->group(function () {
        Route::get('makers', [\App\Http\Controllers\Stationery\MakersApiResourceController::class, 'index']);
        Route::get('makers/{id}', [\App\Http\Controllers\Stationery\MakersApiResourceController::class, 'detail']);


        Route::get('products', [\App\Http\Controllers\Stationery\ProductsApiResourceController::class, 'index']);
        Route::get('products/{id}', [\App\Http\Controllers\Stationery\ProductsApiResourceController::class, 'detail']);
    });
