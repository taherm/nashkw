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

Route::group(['namespace' => 'Backend', 'prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth', 'adminAccessOnly']], function () {

});

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.', 'middleware' => []], function () {
    Route::resource('product', 'ProductController');
    Route::resource('newsletter', 'NewsletterController');
    Route::resource('cart', 'CartController');
    Route::resource('category', 'CategoryController');
    Route::resource('page', 'PageController');
    Route::resource('user', 'UserController');
    Route::resource('order', 'OrderController');
    Route::resource('favorite', 'FavoriteController');
    Route::get('search', 'HomeController@search')->name('search');
    Route::get('currency/{currency}', 'HomeController@changeCurrency')->name('currency.change');
    Route::get('language/{locale}', 'HomeController@changeLanguage')->name('language.change');


});
Auth::routes();

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/home', 'Frontend\HomeController@index')->name('home');
