<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Chanchita extends Model
{
    protected $dates = ['day'];

    public function setDayAttribute($date)
    {
        $this->attributes['day'] = empty($date) ? null : Carbon::parse($date);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_chanchita');
    }
}
