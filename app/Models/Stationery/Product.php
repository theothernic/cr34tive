<?php
    namespace App\Models\Stationery;

    use App\Concerns\Eloquent\Sluggable;
    use App\Models\Dtos\Stationery\ProductDto;
    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Product extends Model
    {
        use HasUuids, SoftDeletes;
        use Sluggable;

        protected $table = 'stationery_products';

        protected $fillable = [
            'maker_id',
            'collection_id',
            'type',
            'slug',
            'title'
        ];

        public function maker(): BelongsTo
        {
            return $this->belongsTo(Maker::class);
        }

        public function collection(): BelongsTo|null
        {
            return $this->belongsTo(Collection::class);
        }

        public function scopeInks($query)
        {
            return $query->where('type', 'ink');
        }

        public function scopePens($query)
        {
            return $query->where('type', 'pen');
        }

        public function getDetailUrl()
        {
            return route('stationery.product', ['slug' => $this->slug]);
        }

        public function getFullTitle()
        {
            return sprintf('%s %s', $this->maker->title, $this->title);
        }

        public function asDto(): ProductDto
        {
            return new ProductDto(array_merge(
                $this->getAttributes(),
                [
                    'fullTitle' => $this->getFullTitle(),
                    'collection' => $this->collection->title ?? null,
                    'maker' => $this->maker->title,
                    'url' => $this->getDetailUrl()
                ])
            );
        }
    }
