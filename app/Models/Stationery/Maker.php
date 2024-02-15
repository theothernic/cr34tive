<?php
    namespace App\Models\Stationery;

    use App\Concerns\Eloquent\Sluggable;
    use App\Models\Dtos\Stationery\MakerDto;
    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Maker extends Model
    {
        use HasUuids, SoftDeletes;

        use Sluggable;

        protected $table = 'stationery_makers';

        protected $fillable = [
            'slug',
            'title'
        ];

        public function asDto()
        {
            return new MakerDto($this->getAttributes());
        }
    }
