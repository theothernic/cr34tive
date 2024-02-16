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
            $records = $this->productService->getByTypeAsDto($type);

            if ($records->isEmpty())
                abort(404);

            $page = new ListViewPageModel([
                'title' => sprintf('Products: %s', ucwords($type)),
                'records' => $records
            ]);

            return $this->respondWithView('stationery.grid', $page);
        }
    }
