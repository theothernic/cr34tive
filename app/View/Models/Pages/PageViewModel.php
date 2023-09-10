<?php
    namespace App\View\Models\Pages;

    use Theothernic\Datamodels\View\PageViewModel as BasePageViewModel;

    class PageViewModel extends BasePageViewModel
    {
        public string $headline = '';
        public ?array $nav = [];
    }
