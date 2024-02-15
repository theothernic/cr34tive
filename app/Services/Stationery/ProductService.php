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
    }
