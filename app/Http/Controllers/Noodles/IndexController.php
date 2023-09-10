<?php
    namespace App\Http\Controllers\Noodles;

    use App\View\Models\Noodles\IndexPageViewModel;
    use Illuminate\View\View;
    use Theothernic\LaravelTraits\Controllers\JsonController;
    use Theothernic\LaravelTraits\Controllers\ViewController;

    class IndexController
    {
        use ViewController;
        use JsonController;

        public function __invoke(): View
        {
            $page = new IndexPageViewModel([
                'title' => 'A bit country, a bit rock-and-roll',
                'nav' => [
                    'home' => route('front'),
                    'subbrand' => route('noodles.index')
                ]
            ]);

            return $this->respondWithView('noodles.index', $page);
        }
    }
