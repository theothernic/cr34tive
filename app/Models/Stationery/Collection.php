<?php
    namespace App\Models\Stationery;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Collection extends Model
    {
        use HasUuids, SoftDeletes;

        protected $fillable = [
            'maker_id',
            'type',
            'title'
        ];
    }
