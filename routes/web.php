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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/customer-delete/{id}', 'CustomerController@destroy')->name('customer.destroy');
Route::resource('customer', 'CustomerController')->except('destroy');

Route::get('/product-order/{id}', 'ProductController@product_order')->name('product.product_order');
Route::get('product/shop', 'ProductController@product_shop')->name('product.product_shop');
Route::get('/product-delete/{id}', 'ProductController@destroy')->name('product.destroy');
Route::resource('product', 'ProductController')->except('destroy');




