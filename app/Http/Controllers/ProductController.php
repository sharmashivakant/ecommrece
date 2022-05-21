<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('pages.frontend.products', compact('products'));
    }
    //

    public function show($slug){
        $product = Product::where('slug',$slug)->with(['category','inventory'])->first();
        $similar_product = Product::where('category_id', $product->category_id)->get();
        return view('pages.frontend.details', compact('product','similar_product'));
    }
     //

}
