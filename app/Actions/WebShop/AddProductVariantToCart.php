<?php

namespace App\Actions\WebShop;

use App\Factories\CartFactory;
use App\Models\Cart;

class AddProductVariantToCart
{
    public function add($variantId,$quantity = 1, $cart = null)
    {
//        $cart = match (auth()->guest()) {
//            true => Cart::firstOrCreate([
//                'session_id' => session()->getId(),
//            ]),
//            false => auth()->user()->cart ?: auth()->user()->cart()->create(),
//        };

//        if(auth()->guest()) {
//            $cart = Cart::firstOrCreate([
//                'session_id' => session()->getId(),
//            ]);
//        }
//
//        if(auth()->user()) {
//            $cart =  auth()->user()->cart ?: auth()->user()->cart()->create();
//        }

        ($cart ?: CartFactory::make())->items()->firstOrCreate([
            'product_variant_id' => $variantId
        ], [
            'quantity' => 0
        ])->increment('quantity', $quantity);
    }
}