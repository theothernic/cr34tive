<?php
    namespace App\Http\Controllers\Pages;

    use Illuminate\View\View;
    use Theothernic\LaravelTraits\Controllers\ViewController;

    class FrontpageController
    {
        use ViewController;
        public function __invoke(): View
        {
            return $this->respondWithView('pages.frontpage');
        }
    }
