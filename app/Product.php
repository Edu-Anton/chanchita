<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'category_id'
    ];
    
    /**
     * Get the category that owns the products.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function chanchitas()
    {
        return $this->belongsToMany(Chanchita::class);
    }
}
