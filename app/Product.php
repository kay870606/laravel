<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }

    public static function getDefaultImageStoragePath()
    {
        return 'images/products/' . date('Y-m-d');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('subcategory_id');
        });
    }
}
