<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\Controller;
    use App\Http\Controllers\ViewController;
    use App\Services\Stationery\ProductService;
    use App\View\Models\Stationery\IndexPageViewModel;


    class IndexController extends ViewController
    {
        public function __construct(
            private readonly ProductService $productService
        )
        {
        }

        public function __invoke()
        {
            $page = new IndexPageViewModel([
                'title' => 'Pen & Ink: Stationery DB',
                'headline' => 'Today\'s Stationery Offerings',
                'inks' => $this->productService->getLatestProductsAsDto('ink'),
                'totalInks' => $this->productService->getTotalProductCountByType('ink'),
                'pens' => $this->productService->getLatestProductsAsDto('pen'),
                'totalPens' => $this->productService->getTotalProductCountByType('pen'),
                'nav' => [
                    'home' => route('front'),
                    'subbrand' => route('stationery.index')
                ]
            ]);
            return $this->respondWithView('stationery.index', $page);
        }
    }
