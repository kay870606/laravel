<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeywordMapping extends Model
{
    protected $guarded = [];

    public function keyword()
    {
        return $this->belongsTo('App\Keyword');
    }
}
