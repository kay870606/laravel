<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beacon extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
