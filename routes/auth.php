<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authentication Routes
|------------------------------------------------------  --------------------
*/
Route::match(['get', 'post'],'register', 'AuthController@register')->name('account.register');
Route::get('signin', 'AuthController@signin')->name('account.login');
Route::post('auth/login', 'AuthController@authenticate')->name('account.auth');
Route::get('signout','AuthController@signout')->name('account.logout');

