<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\Controller;
    use App\Services\Stationery\MakerService;
    use App\Services\Stationery\ProductService;
    use Illuminate\Http\JsonResponse;

    class ApiResourceController extends Controller
    {
        public function __construct(
            private readonly MakerService $makerService,
            private readonly ProductService $productService
        )
        {
        }
        public function makers(): JsonResponse
        {
            $data = $this->makerService->allAsDtos();

            return $this->respondWithJson($data);
        }

        public function products(): JsonResponse
        {
            $data = $this->productService->allAsDtos();
            return $this->respondWithJson($data);
        }
    }
