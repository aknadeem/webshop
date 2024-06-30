<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{
   public $productId;
   public $variant;
    public function mount()
    {
         return $this->variant = $this->product?->variants()->value('id');
    }

    public $rules = [
        'variant' => ['required', 'exists:App\Models\ProductVariant, id'],
    ];

    public function addToCart()
    {
         $this->validate();
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
