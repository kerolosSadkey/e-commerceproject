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





Route::get('/addproduct','productController@index')->name("addp");
Route::get('/addcategory','categoryController@index')->name("addc");
Route::post("/adduser","userController@adduser")->name("addusers");
Route::post("/addproduct","productController@addproduct")->name("addproducts");
Route::post("/addcat","categoryController@addcat")->name("addcats");
Route::get("/logout","Auth\LoginController@logout")->name("logout");
Route::get("/allcat","categoryController@allcategory")->name("allcat");
Route::middleware('auth')->group(function () {
    Route::get("/allproduct/{namcat}","productController@allproduct")->name("allproduct");
    Route::get("/allcart","cartController@allcart")->name("allcart");
    });


Route::post("/buyproduct","cartController@buyproduct")->name("buyproduct");
Route::post("/addcart","cartController@addcart")->name("addcart");
Route::get('/modifyproduct','productController@indexmod')->name("modify");
Route::get("/productedit/{id}","productController@desplayonepro")->name("editpro");
Route::get("/catedit/{id}","categoryController@desplaycat")->name("editcat");

Route::post("/editproduct","productController@editproduct")->name("editproducts");
Route::post("/editcatrgory","categoryController@editcatrgory")->name("editcatrgory");

Route::post("/deletproduct","productController@deleteproduct")->name("deletproducts");
Route::post("/deletecetogry","categoryController@deletecetogry")->name("deletecetogry");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
