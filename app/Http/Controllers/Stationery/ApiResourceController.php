<?php
    namespace App\Http\Controllers\Stationery;

    use App\Http\Controllers\Controller;
    use App\Services\Stationery\MakerService;

    class ApiResourceController extends Controller
    {
        public function __construct(
            private readonly MakerService $makerService
        )
        {
        }


        public function index()
        {
            $data = $this->makerService->allAsDtos();

            return $this->respondWithJson($data);
        }
    }
