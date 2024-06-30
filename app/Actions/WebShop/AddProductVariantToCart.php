<?php

namespace App\Actions\WebShop;

use App\Factories\CartFactory;
use App\Models\Cart;

class AddProductVariantToCart
{
    public function add($variantId)
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

        CartFactory::make()->items()->create([
            'product_variant_id' => $variantId,
            'quantity' => 1
        ]);
    }
}