<?php
    namespace App\Services\Stationery;

    use App\Models\Dtos\Stationery\MakerDto;
    use App\Models\Stationery\Maker;
    use Illuminate\Support\Collection;

    class MakerService
    {
        public function all()
        {
            return Maker::all();
        }

        public function allAsDtos(): Collection
        {
            $data = collect();
            $models = Maker::orderBy('title', 'asc')->get();

            foreach ($models as $model)
                $data->push($model->asDto());

            return $data;
        }

        public function getAsDto(string $id): MakerDto
        {
            return Maker::findOrFail($id)->asDto();
        }
    }
