<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
