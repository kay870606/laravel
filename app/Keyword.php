<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $guarded = [];

    public function keywordMappings()
    {
        return $this->hasMany('App\KeywordMapping');
    }
}
