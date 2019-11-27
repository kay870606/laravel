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

    public function beacons()
    {
        return $this->hasManyThrough('App\Beacon', 'App\CategoryBeacon');
    }

    public function categoryActivities()
    {
        return $this->hasMany('App\CategoryActivity');
    }
}
