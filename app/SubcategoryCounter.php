<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubcategoryCounter extends Model
{
    protected $guarded = [];

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
}
