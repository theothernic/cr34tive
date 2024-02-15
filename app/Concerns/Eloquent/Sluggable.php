<?php
    namespace App\Concerns\Eloquent;


    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Str;

    trait Sluggable
    {
        public static function bootSluggable()
        {
            static::creating(function (Model $model) {
                if (empty($model->slug))
                    $model->slug = Str::slug($model->title);
            });
        }
    }
