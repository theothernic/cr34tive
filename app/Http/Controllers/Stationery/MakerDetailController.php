<?php
    namespace App\Http\Controllers\Stationery;

    class MakerDetailController
    {
        public function __invoke(string $slug)
        {
            return $slug;
        }
    }
