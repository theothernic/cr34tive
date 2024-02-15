<?php
    namespace App\Models\Dtos\Stationery;

    use Bearlovescode\Datamodels\Dto\Dto;

    class ProductDto extends Dto
    {
        public string $id;
        public string $slug;
        public string $title;
        public string $fullTitle;
        public ?string $collection;
        public string $maker;
        public string $url;
    }
