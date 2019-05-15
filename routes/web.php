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
Route::group(['prefix' => 'admin/config/products','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'ProductsOptionsController@index')->name('products.config');
    Route::post('/', 'ProductsOptionsController@store')->name('config.products.create');
    Route::delete('/{id}', 'ProductsOptionsController@destroy')->name('products.option.destroy');
    Route::put('/type/{id}', 'ProductsOptionsTypesController@update')->name('productsoptionstypes.update');
    Route::get('/option/edit/{id}', 'ProductsOptionsController@edit')->name('productsoptions.edit');
    Route::put('/option/edit', 'ProductsOptionsController@update')->name('productsoptions.update');
    Route::post('/create_type','ProductsOptionsTypesController@store')->name('productsoptionstypes.store');
});


Route::group(['prefix' => 'admin/products','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'ProductsController@index')->name('products');
    Route::get('/create', 'ProductsController@create')->name('products.create');
    Route::post('/create', 'ProductsController@store')->name('products.store');
    Route::get('/block/{product}', 'ProductsController@block')->name('products.block');
    Route::get('/unblock/{product}', 'ProductsController@unblock')->name('products.unblock');
});


Route::group(['prefix' => 'admin/stock','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'StockController@index')->name('stocks');
    Route::post('/store', 'StockController@store')->name('stocks.store');
    Route::get('/input','StockController@input')->name('stocks.input');
    Route::post('/input','StockController@store')->name('stocks.input');
    Route::get('/output','StockController@output')->name('stocks.output');
    Route::post('/output','StockController@store')->name('stocks.output');
    Route::get('/find/{id}','StockController@findById')->name('stocks.findbyid');
});


Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::resource('/products/config', 'ProductsOptionsTypesController');
    Route::resource('/products', 'ProductsController');
    Route::resource('/stock', 'StockController');
    Auth::routes();
    \AgenciaMaior\LaravelBoilerplate\LaravelBoilerplateServiceProvider::routes();

});


Route::get("/",function(){
    return view('home');
});


Route::group(['prefix'=>'atletica'],function(){
    Route::get('/',function(){
        return view('atletica.home');
    })->name("atletica.home");

    Route::get('/loja',function(){
        return view('atletica.loja.index');
    })->name("atletica.loja");
});
