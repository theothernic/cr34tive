<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\Controller;
    use App\View\Models\Stationery\IndexPageViewModel;


    class IndexController extends Controller
    {
        public function __invoke()
        {
            $page = new IndexPageViewModel([
                'title' => 'Pen & Ink: Stationery DB',
                'headline' => 'Today\'s Stationery Offerings',
                'nav' => [
                    'home' => route('front'),
                    'subbrand' => route('stationery.index')
                ]
            ]);
            return $this->respondWithView('stationery.index', $page);
        }
    }
