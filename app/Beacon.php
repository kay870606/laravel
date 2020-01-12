<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beacon extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_beacons')
            ->withPivot('id')
            ->withTimestamps();
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($beacon) {
            $beacon->categories()->delete();
        });

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('name');
        });
    }
}
