<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Money\Money;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

//    protected function total() :Attribute
//    {
//        return Attribute::make(
//            get: function ($value) {
//            return $this->quantity * $this->variant->price;
//        });
//    }

    protected function gettTotalAttribute()
    {
        return $this->items()->reduce(function (Money $total, CartItem $item) {
           return 0;
        }, 0);
    }

    public function items()
    {
        return $this->hasMany(CartItem::class, 'cart_id');
    }
}
