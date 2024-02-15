<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\ViewController;
    use App\Services\Stationery\ProductService;
    use App\View\Models\Stationery\DetailPageViewModel;

    class ProductDetailController extends ViewController
    {
        public function __construct(
            private readonly ProductService $productService
        )
        {
        }

        public function __invoke(string $slug)
        {
            $record = $this->productService->findViaSlug($slug);

            $page = new DetailPageViewModel([
                'title' => sprintf('%s %s', $record->maker->title, $record->title),
                'headline' => sprintf('%s %s', $record->maker->title, $record->title),
                'nav' => [
                    'home' => route('front'),
                    'subbrand' => route('stationery.index')
                ]
            ]);
            return $this->respondWithView('stationery.detail', $page);
        }
    }
