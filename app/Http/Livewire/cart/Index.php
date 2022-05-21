<?php

namespace App\Http\Livewire\Cart;

use App\Models\Product;
use Livewire\Component;
use ShoppingCart;

class Index extends Component
{

    public function mount()
    {
        $this->cart = ShoppingCart::all();
    }
    public function removeIt($id)
    {
        ShoppingCart::remove($id);
        $this->cart = ShoppingCart::all();
        $this->emit('cartRemove');
    }
    public function render()
    {
        return view('livewire.cart.index');
    }
}
