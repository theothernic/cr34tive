<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\ViewController;

    class MakerDetailController extends ViewController
    {
        public function __invoke(string $slug)
        {
            return $slug;
        }
    }
