<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PositionRecord extends Model
{
    protected $guarded = [];

    public function beacon()
    {
        return $this->belongsTo('App\Beacon');
    }
}
