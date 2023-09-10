<?php
    namespace App\Http\Controllers\Pages;

    use App\View\Models\Pages\ContentPageViewModel;
    use Theothernic\LaravelTraits\Controllers\ViewController;

    class PageController
    {
        use ViewController;

        public function credits()
        {
            $page = new ContentPageViewModel([
                'title' => 'Credits',
                'headline' => 'Credits Page',
                'nav' => [
                    'home' => route('front')
                ]
            ]);

            return $this->respondWithView('pages.content', $page);
        }
    }
