<?php

namespace App\Livewire;

use App\Factories\CartFactory;
use Livewire\Component;

class Cart extends Component
{

    public function getItemsProperty()
    {
        return CartFactory::make()->items;
    }
    public function render()
    {
        return view('livewire.cart');
    }

    // increaseQuantity
    public function increaseQuantity($itemId)
    {
        CartFactory::make()->items()->find($itemId)->increment('quantity');
        $this->dispatch('productAddedToCart');
    }

    public function decreaseQuantity($itemId)
    {
        $item = CartFactory::make()->items()->find($itemId);
        if ($item->quantity > 1) {
            $item->decrement('quantity');
            $this->dispatch('productRemovedFromCart');
        }
    }

    public function deleteItem($itemId)
    {
        CartFactory::make()->items()->where('id', $itemId)->delete();
        $this->dispatch('productRemovedFromCart');
    }
}
