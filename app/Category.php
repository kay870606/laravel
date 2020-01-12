<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }

    public function beacons()
    {
        return $this->belongsToMany('App\Beacon', 'category_beacons')
            ->withPivot('id')
            ->withTimestamps();
    }

    public function categoryActivities()
    {
        return $this->hasMany('App\CategoryActivity');
    }

    public function products()
    {
        return $this->hasManyThrough('App\Product', 'App\Subcategory');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            $category->subcategories()->delete();
            $category->beacons()->delete();
            $category->categoryActivities()->delete();
        });

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('number');
        });
    }
}
