<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
