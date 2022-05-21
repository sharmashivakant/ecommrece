<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/', 'AccountController@index');
    Route::get('dashboard', 'AccountController@dashboard')->name('user.dashboard');
    Route::get('profile', 'AccountController@profile')->name('profile');
    Route::post('update-profile/{id}', 'AccountController@updateProfile')->name('profile.update');
    Route::get('checkout/{cart?}', 'CheckoutController@index')->name('order.checkout');
    Route::post('order-store', 'CheckoutController@store')->name('order.generate');
    Route::post('order-placed', 'ProductController@order')->name('order.placed');

    //Route::get('user-order', 'OrderController@order')->name('user.order');

    // Route::group(['prefix'=>'address','as'=>'addresss.'], function(){
    //     Route::get('make-primary/{id}', 'AddressController@status')->name('primary');
    // });

    Route::resources([
        'order'          => OrderController::class,
    ]);
});
