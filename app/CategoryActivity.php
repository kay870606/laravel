<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryActivity extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}
