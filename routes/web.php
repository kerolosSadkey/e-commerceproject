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
    return view('home');
});
Route::get('/product', function () {
    return view('product');
})->name("product");
Route::get('/productofcatogry', function () {
    return view('productOfCatogry');
})->name("productofcat");
Route::get('/cart', function () {
    return view('cart');
})->name("cart");
Route::get('/addp', function () {
    return view('addproduct');
})->name("addc");
Route::get('/addc', function () {
    return view('addCatogry');
})->name("cart");
Route::get('/modp', function () {
    return view('modifyproduct');
})->name("addc");
Route::get('/modc', function () {
    return view('modifycat');
})->name("cart");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
