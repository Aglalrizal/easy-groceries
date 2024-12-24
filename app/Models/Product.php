<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
        "name",
        "price",
        "slug",
        "stock",
        "image",
        "unit",
    ];
    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
