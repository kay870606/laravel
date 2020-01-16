<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Subcategory extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = ['belong_category_first_beacon'];

    public function getBelongCategoryFirstBeaconAttribute()
    {
        return $this->category()->first()->beacons()->first();
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($subcategory) {
            $subcategory->products()->delete();
        });

        /*static::addGlobalScope('order', function (Builder $builder) {
            $builder->addSelect(['category_number' => Category::select('number')
                ->whereColumn('category_id', 'categories.id')
                ->limit(1)
            ])->orderBy('category_number');
        });*/

        /*static::addGlobalScope('order', function (Builder $builder) {
           // $builder->orderBy('category_id')->orderBy('order');
        });*/
    }
}
