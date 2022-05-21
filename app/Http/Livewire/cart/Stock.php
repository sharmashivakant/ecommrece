<?php

namespace App\Http\Livewire\Cart;
use App\Models\Product;
use App\Models\Inventory;
use Livewire\Component;
use ShoppingCart;

class Stock extends Component
{
    public $inventory;
    public $data;
    public $rawid=[];
    public function mount(){
        $data =ShoppingCart::all();
        foreach ($data as $item) {
        ShoppingCart::associate('App\Models\Product');
        ShoppingCart::associate('App\Models\Inventory');
        $product = Product::find($item->id);
        $instock = $product->inventory->quantity;
        $left_stock = $instock - $item->qty;

        $final = Inventory::where('id', $product->inventory_id)
       ->update([
           'quantity' => $left_stock
        ]);
        //$this->rawid[] = $left_stock;
        }
    }
    public function render()
    {
        return view('livewire.cart.stock');
    }
}
