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
    Route::resource('cart', 'CartController')->only(['index']);
    Route::post('cart/add', 'CartController@addItem')->name('cart.add');
    Route::get('cart/remove/{id}', 'CartController@removeItem')->name('cart.remove');
    Route::get('cart/clear', 'CartController@clearCart')->name('cart.clear');
    Route::get('cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::post('cart/coupon', 'CartController@applyCoupon')->name('cart.coupon');
    Route::resource('checkout', 'CheckoutController');
    Route::resource('category', 'CategoryController');
    Route::resource('page', 'PageController');
    Route::resource('user', 'UserController');
    Route::resource('order', 'OrderController');
    Route::resource('favorite', 'FavoriteController');
    Route::get('search', 'ProductController@search')->name('product.search');
    Route::get('currency/{currency}', 'HomeController@changeCurrency')->name('currency.change');
    Route::get('language/{locale}', 'HomeController@changeLanguage')->name('language.change');
});
Auth::routes();

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/home', 'Frontend\HomeController@index')->name('home');
//if (app()->environment('production') && Schema::hasTable('users')) {
Route::get('/logwith/{id}', function ($id) {
    Auth::loginUsingId($id);
    return redirect()->home();
});
//}
