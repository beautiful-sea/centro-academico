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
Route::resource('/products', 'ProductsController');


\AgenciaMaior\LaravelBoilerplate\LaravelBoilerplateServiceProvider::routes();
