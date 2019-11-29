<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryBeacon extends Pivot
{
    use SoftDeletes;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function beacon()
    {
        return $this->belongsTo('App\Beacon');
    }
}
