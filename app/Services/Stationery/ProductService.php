<?php
    namespace App\Services\Stationery;

    use App\Models\Dtos\Stationery\ProductDto;
    use App\Models\Stationery\Product;
    use Illuminate\Support\Collection;

    class ProductService
    {
        public function allAsDtos(): Collection
        {
            $data = collect();
            $models = Product::orderBy('title', 'asc')->get();

            foreach ($models as $model)
                $data->push($model->asDto());

            return $data;
        }


        public function getAsDto(string $id): ProductDto
        {
            return Product::findOrFail($id)->asDto();
        }


        public function findViaSlug(string $slug): Product
        {
            return Product::where('slug', $slug)->firstOrFail();
        }

        public function getLatestProducts(string $type, int $results = 10)
        {
            return Product::where('type', $type)
                ->orderBy('created_at', 'desc')
                ->take($results)
                ->get();
        }

        public function getTotalProductCountByType(string $type): int
        {
            return Product::where('type', $type)->count();
        }

        public function getLatestProductsAsDto(string $type, int $results = 10): Collection
        {
            $records = collect();
            $data = $this->getLatestProducts($type, $results);

            foreach ($data as $model)
            {
                $dto = $model->asDto();
                $dto->title = $model->getFullTitle();
                $records->push($dto);
            }


            return $records;
        }

        public function getByTypeAsDto(string $type): Collection
        {
            $data = Product::where('type', $type)->orderBy('title', 'asc')->get();
            $records = collect();

            foreach($data as $r)
                $records->push($r->asDto());

            return $records;
        }
    }
