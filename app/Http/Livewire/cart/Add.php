<?php

namespace App\Http\Livewire\Cart;

use App\Models\Product;
use Livewire\Component;
use ShoppingCart;

class Add extends Component
{
    public $productID;
    public $rows;
    public $tax;
    protected $listeners = ['cartRemove' => 'updateRow'];

    public function mount($pid)
    {
        $this->productID = $pid;
        $this->updateRow();
    }

    public function updateRow()
    {
        $this->rows = (ShoppingCart::search(['id' => $this->productID])->isEmpty()) ? false : true;
    }

    public function addToCart()
    {
        $this->emit('cartUpdate');
        ShoppingCart::associate('App\Models\Product');
        $product = Product::find($this->productID);
        $tax = $product->price*(12/100);
        $row  = ShoppingCart::add($product->id, $product->name, 1,$product->price, ['tax' =>$tax]);
        //$this->rowID = $row->rawId();
        $this->updateRow();
        $this->emit('cartAdded');
    }

    public function render()
    {
        return view('livewire.cart.add');
    }
}
