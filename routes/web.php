<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;


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

//product route..

Route::get('/','ProductController@index')->name('product.index');
Route::get('boutique/{slug}','ProductController@show')->name('product.show');

//carte Shopping  routes
Route::get('/panier','CarteController@index')->name('cart.index');

Route::post('/panier/ajouter','CarteController@store')->name('carte.store');
Route::delete('/panier/{rowId}','CarteController@destroy')->name('carte.destroy');


Route::get('/videpanier',function(){
    Cart::destroy();
});
//payment routes
Route::get('/payment', 'PaymentController@index')->name('payment.index');
// *******************************************************************
Route::post('/charge', 'PaymentController@charge')->name('payment.charge');
//******************************************************************** */
Route::post('/payment', 'PaymentController@store')->name('payment.store');
Route::post('/merci',function(){
    return view('payment.thankyou');
});


//********one to ùany relationship******* */
//Route::get('/category','ProductController@getCategory');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
