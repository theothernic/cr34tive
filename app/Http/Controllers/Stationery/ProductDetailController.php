<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\Controller;

    class ProductDetailController extends Controller
    {
        public function __invoke(string $slug)
        {
            return $slug;
        }
    }
