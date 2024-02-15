<?php
    namespace App\Http\Controllers\Noodles;

    use App\Http\Controllers\ViewController;
    use App\View\Models\Noodles\IndexPageViewModel;
    use Illuminate\View\View;


    class IndexController extends ViewController
    {
        public function __invoke(): View
        {
            $page = new IndexPageViewModel([
                'title' => 'Noodles',
                'headline' => 'A bit country, a bit rock-and-roll',
                'nav' => [
                    'home' => route('front'),
                    'subbrand' => route('noodles.index')
                ]
            ]);

            return $this->respondWithView('noodles.index', $page);
        }
    }
