<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use ShoppingCart;

class Count extends Component
{
    public $count;
    protected $listeners = [
        'cartAdded'   => 'cartAdd',
        'cartRemove'  => 'cartAdd',
        'cartUpdate' => 'cartUpdate'
    ];

    public function mount()
    {
        $this->count = ShoppingCart::countRows();
    }

    public function cartAdd()
    {
        $this->count = ShoppingCart::countRows();
    }

    public function cartUpdate()
    {
        $this->count = ShoppingCart::countRows();
    }

    public function render()
    {
        return view('livewire.cart.count');
    }
}
