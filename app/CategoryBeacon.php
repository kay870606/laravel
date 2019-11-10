<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryBeacon extends pivot
{
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
