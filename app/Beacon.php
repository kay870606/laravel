<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beacon extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
