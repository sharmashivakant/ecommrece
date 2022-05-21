<?php

use App\Models\Address;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/sample', function () {
    //return Cart::destroy();

    $item = Cart::add([
        'id'     => 1,
        'name'   => 'Product 1',
        'qty'    => 1,
        'price'  => 600.00,
        'weight' => 0,
        'options' => [
            'size' => 'large'
        ]
    ]);
    //return $item->id;
    Cart::associate($item->rowId,'App\Models\Product');

    // foreach(Cart::content() as $row) {
    //     echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->details . '" in your cart.';
    // }
    // return dd('Ok');

    // Cart::add([
    //     'id'     => '253ad',
    //     'name'   => 'Product Sample',
    //     'qty'    => 1,
    //     'price'  => 1000.00,
    //     'weight' => 0,
    //     'options' => [
    //         'size' => 'large'
    //     ]
    // ]);

    //Cart::setGlobalDiscount(50);

    // return [
    //     'cart' => Cart::content(),
    //     'total' => Cart::total(),
    //     'discount' => Cart::discount(),
    //     'tax'  => Cart::tax()
    // ];

    //return Cart::add('293ad', 'Product 1'  , 1, 100);
    //Cart::add('1239ad0', 'Product 2', 2, 5.95, 750);

    return view('layouts.web');
});

// Route::get('/' , 'FrontendController@index')->name('home');
Route::get('/home' , 'FrontendController@home')->name('home');
Route::get('/about-us' , 'FrontendController@about')->name('about');
Route::get('/contact-us' , 'FrontendController@contact')->name('cotact');
Route::post('/contact-store' , 'FrontendController@contactStore')->name('contact.store');

Route::get('collection/view/{id}', 'ProductController@show')->name('collection.view');
Route::get('collection/list', 'ProductController@index')->name('collection.list');


