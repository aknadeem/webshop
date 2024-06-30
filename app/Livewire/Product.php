<?php

namespace App\Livewire;

use App\Actions\WebShop\AddProductVariantToCart;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class Product extends Component
{
    use InteractsWithBanner;

   public $productId;
   public $variant;
    public function mount()
    {
         return $this->variant = $this->product?->variants()->value('id');
    }

    public $rules = [
        'variant' => ['required', 'exists:App\Models\ProductVariant,id'],
    ];

    public function addToCart(AddProductVariantToCart $cart)
    {
        $this->validate();
        $cart->add(variantId: $this->variant);

        $this->banner('your Product has been added to your cart');

        $this->dispatch('productAddedToCart');
    }

    public function getProductProperty()
    {
        return \App\Models\Product::findOrfail($this->productId);
    }

    public function render()
    {
        return view('livewire.product');
    }
}
