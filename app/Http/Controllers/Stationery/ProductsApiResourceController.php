<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\ApiController;
    use App\Http\Controllers\Controller;
    use App\Services\Stationery\ProductService;
    use Illuminate\Http\JsonResponse;

    class ProductsApiResourceController extends ApiController
    {
        public function __construct(
            private readonly ProductService $productService
        )
        {
        }

        public function index(): JsonResponse
        {
            $data = $this->productService->allAsDtos();
            return $this->respondWithJson($data);
        }

        public function detail(string $id): JsonResponse
        {
            $data = $this->productService->getAsDto($id);
            return $this->respondWithJson($data);
        }
    }
