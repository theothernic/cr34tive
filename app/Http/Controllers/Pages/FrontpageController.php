<?php
    namespace App\Http\Controllers\Pages;

    use App\View\Models\Pages\ContentPageViewModel;
    use Illuminate\View\View;
    use Theothernic\LaravelTraits\Controllers\ViewController;

    class FrontpageController
    {
        use ViewController;
        public function __invoke(): View
        {
            $page = new ContentPageViewModel([
                'title' => 'Welcome',
            ]);

            return $this->respondWithView('pages.frontpage', $page);
        }
    }
