<?php
    namespace App\Http\Controllers\Stationery;

    class MakerController
    {
        public function __invoke(string $slug)
        {
            return $slug;
        }
    }
