<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\ViewController;

    class ProductDetailController extends ViewController
    {
        public function __invoke(string $slug)
        {
            return $slug;
        }
    }
