<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryActivity extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = ['image_url', 'description'];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }

    public function getDescriptionAttribute()
    {
        return $this->name;
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
