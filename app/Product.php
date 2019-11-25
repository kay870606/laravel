<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        return asset('storage/' . $this->path);
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
}
