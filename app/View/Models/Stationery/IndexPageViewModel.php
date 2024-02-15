<?php
    namespace App\View\Models\Stationery;

    use App\View\Models\Pages\PageViewModel;
    use Illuminate\Support\Collection;

    class IndexPageViewModel extends StationeryPageViewModel
    {
        public ?Collection $inks;
        public ?Collection $pens;
    }
