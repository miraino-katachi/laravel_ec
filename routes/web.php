<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('', 'ShopController@index')->name('top');

Route::group(['middleware' => ['auth']], function (){
    Route::get('mycart', 'ShopController@mycart')->name('mycart');
    Route::post('mycart', 'ShopController@addMyCart')->name('addMyCart');
    Route::post('cartdelete', 'ShopController@deleteCart')->name('cartdelete');
    Route::post('checkout', 'ShopController@checkout')->name('checkout');
});
