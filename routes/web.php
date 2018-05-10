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

Route::group(['namespace' => 'Frontend', 'prefix' => 'frontend', 'as' => 'frontend.', 'middleware' => []], function () {

    Route::get('/', function () {
        return view('welcome');
    });


});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
