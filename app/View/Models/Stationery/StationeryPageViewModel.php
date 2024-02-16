<?php
    namespace App\View\Models\Stationery;

    use App\View\Models\Pages\PageViewModel;

    class StationeryPageViewModel extends PageViewModel
    {
        public ?string $subBrand = 'stationery';


        public function __construct(mixed $data)
        {
            parent::__construct($data);

            $this->nav = [
                'home' => route('front'),
                'subbrand' => route('stationery.index')
            ];
        }
    }
