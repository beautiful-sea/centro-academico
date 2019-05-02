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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => '/products'], function () {
            Route::get('/', 'ProductsController@index')->name('products');
            Route::get('/create', 'ProductsController@create')->name('products.create');
            Route::post('/create', 'ProductsController@store')->name('products.store');
            Route::get('/block/{product}', 'ProductsController@block')->name('products.block');
            Route::get('/unblock/{product}', 'ProductsController@unblock')->name('products.unblock');
        });
Route::group(['prefix' => '/stock'], function () {
            Route::get('/', 'StockController@index')->name('stocks');
            Route::post('/store', 'StockController@store')->name('stocks.store');
            Route::get('/input','StockController@input')->name('stocks.input');
            Route::get('/input/{id}','StockController@getInput')->name('stocks.getinput');
            Route::post('/input','StockController@store')->name('stocks.input');
            Route::get('/output','StockController@output')->name('stocks.output');
            Route::post('/output','StockController@store')->name('stocks.output');

        });

Route::resource('/products', 'ProductsController');
Route::resource('/stock', 'StockController');


\AgenciaMaior\LaravelBoilerplate\LaravelBoilerplateServiceProvider::routes();
