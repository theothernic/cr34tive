<?php
    namespace App\Models\Stationery;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Product extends Model
    {
        use HasUuids, SoftDeletes;

        protected $table = 'stationery_products';

        protected $fillable = [
            'maker_id',
            'collection_id',
            'type',
            'title'
        ];
    }
