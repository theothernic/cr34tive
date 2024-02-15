<?php
    namespace App\Http\Controllers\Pages;

    use App\Http\Controllers\ViewController;
    use App\View\Models\Pages\ContentPageViewModel;

    class PageController extends ViewController
    {

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
