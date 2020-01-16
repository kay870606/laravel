<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryBeacon extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $with = ['category', 'beacon'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function beacon()
    {
        return $this->belongsTo('App\Beacon');
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
