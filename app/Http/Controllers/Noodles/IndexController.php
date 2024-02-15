<?php
    namespace App\Http\Controllers\Noodles;

    use App\View\Models\Noodles\IndexPageViewModel;
    use Illuminate\View\View;
    use Bearlovescode\LaravelTraits\Controllers\JsonController;
    use Bearlovescode\LaravelTraits\Controllers\ViewController;

    class IndexController
    {
        use ViewController;
        use JsonController;

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
