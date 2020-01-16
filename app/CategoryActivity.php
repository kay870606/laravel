<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryActivity extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->addSelect(['category_number' => Category::select('number')
                ->whereColumn('category_id', 'categories.id')
                ->limit(1)
            ])->orderBy('category_number');
        });
    }
}
