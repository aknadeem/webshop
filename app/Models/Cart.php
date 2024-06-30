<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Money\Currency;
use Money\Money;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function total(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
            return $this->items?->reduce(function (Money $total, CartItem $item) {
                return $total->add($item->subtotal);
            }, new Money(0, new Currency('USD')));
        });
    }



    public function items()
    {
        return $this->hasMany(CartItem::class, 'cart_id');
    }
}
