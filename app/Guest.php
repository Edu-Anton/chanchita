<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'chanchita_id'
    ];


    public function chanchita()
    {
        return $this->belongsTo(Chanchita::class);
    }
}
