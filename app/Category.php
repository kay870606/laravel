<?php

namespace App;

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

    /*public function addSubcategory($subcategory)
    {
        $this->subcategories()->create($subcategory);
    }*/

    public function beacons()
    {
        return $this->belongsToMany('App\Beacon', 'category_beacon');
    }
}
