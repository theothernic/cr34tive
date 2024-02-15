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
            $models = $this->all();

            foreach ($models as $model)
                $data->push($model->asDto());

            return $data;
        }
    }
