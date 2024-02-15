<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\ApiController;
    use App\Http\Controllers\Controller;
    use App\Services\Stationery\MakerService;
    use Illuminate\Http\JsonResponse;

    class MakersApiResourceController extends ApiController
    {
        public function __construct(
            private readonly MakerService $makerService
        )
        {
        }

        public function index(): JsonResponse
        {
            $data = $this->makerService->allAsDtos();
            return $this->respondWithJson($data);
        }

        public function detail(string $id): JsonResponse
        {
            $data = $this->makerService->getAsDto($id);
            return $this->respondWithJson($data);
        }
    }
