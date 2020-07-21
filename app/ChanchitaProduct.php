<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChanchitaProduct extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'quantity', 'url_img', 'category_id'
    ];
    
    public function chanchita()
    {
        return $this->belongsTo(Chanchita::class);
    }
}
