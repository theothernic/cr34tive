<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\ViewController;
    use App\Services\Stationery\ProductService;
    use App\View\Models\Stationery\ListViewPageModel;

    class ProductGridController extends ViewController
    {
        public function __construct(
            private readonly ProductService $productService
        )
        {
        }

        public function __invoke(string $type)
        {
            $page = new ListViewPageModel([
                'title' => sprintf('Products: %s', ucwords($type)),
                'records' => $this->productService->getByTypeAsDto($type),
            ]);

            return $this->respondWithView('stationery.grid', $page);
        }
    }
