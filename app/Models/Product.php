<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'brand_id', 'image'];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
}
