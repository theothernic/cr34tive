<?php
    namespace App\Services\Stationery;

    use App\Models\Stationery\Maker;

    class MakerService
    {
        public function all()
        {
            return Maker::all();
        }

        public function allAsDtos()
        {
            $data = collect();
            $models = Maker::orderBy('title', 'asc')->get();

            foreach ($models as $model)
                $data->push($model->asDto());

            return $data;
        }
    }
