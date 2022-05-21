<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'web','as'=>'admin.'], function()
{
    // Route::get('/', 'BackendController@index');
    Route::get('/signin','BackendController@signin')->name('admin.signin');
    Route::get('dashboard', 'BackendController@dashboard')->name('admin.dashboard');




     Route::group(['prefix'=>'catalog','as'=>'catalog.'], function(){
        Route::match(['get','post'], 'upload-image','CatalogController@upload')->name('upload');
     });
    Route::resources([
                        'customer'  => CustomerController::class,
                        'catalog'   => CatalogController::class,
                        'orders'    => OrdersController::class,
                        'payments'   => PaymentController::class,
                    ]);

});
