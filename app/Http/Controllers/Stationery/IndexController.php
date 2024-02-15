<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\Controller;
    use App\View\Models\Stationery\IndexPageViewModel;
    use Theothernic\LaravelTraits\Controllers\JsonController;
    use Theothernic\LaravelTraits\Controllers\ViewController;

    class IndexController extends Controller
    {
        use ViewController;
        use JsonController;
        public function __invoke()
        {
            $page = new IndexPageViewModel([
                'title' => 'Pen and Ink: Stationery',
                'nav' => [
                    'home' => route('front'),
                    'subbrand' => route('stationery.index')
                ]
            ]);
            return $this->respondWithView('stationery.index', $page);
        }
    }
