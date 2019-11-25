<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beacon extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function categories()
    {
        return $this->hasManyThrough('App\Category', 'App\CategoryBeacon');
    }
}
