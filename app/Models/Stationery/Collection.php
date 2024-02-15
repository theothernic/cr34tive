<?php
    namespace App\Models\Stationery;

    use App\Concerns\Eloquent\Sluggable;
    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Collection extends Model
    {
        use HasUuids, SoftDeletes;
        use Sluggable;

        protected $fillable = [
            'maker_id',
            'type',
            'slug',
            'title'
        ];


    }
