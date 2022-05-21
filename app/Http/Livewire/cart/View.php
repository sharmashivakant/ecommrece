<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use ShoppingCart;

class View extends Component
{
    public $cart;
    protected $listeners = ['cartAdded' => 'cartAdd'];

    public function mount()
    {
        $this->cart = ShoppingCart::all();
    }

    public function cartAdd()
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
        return view('livewire.cart.view');
    }
}
