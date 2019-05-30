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
    Route::get('/', 'ProductsController@config')->name('products.config');
    Route::get('/sizes/edit/{id}', 'SizesController@edit')->name('config.sizes.edit');
    Route::put('/sizes/edit/{id}', 'SizesController@update')->name('sizes.update');
    Route::put('/colors/edit/{id}', 'ColorsController@update')->name('colors.update');
    Route::get('/colors/edit/{id}', 'ColorsController@edit')->name('config.colors.edit');
    Route::post('/types/create', 'ProductsController@defineTypeToStore')->name('config.products.types.create');


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

Route::group(['prefix' => 'admin/minutes','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'MinutesController@index')->name('minutes');
});


Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::resource('/products/config', 'ProductsOptionsTypesController');
    Route::resource('/products', 'ProductsController');
    Route::resource('/stock', 'StockController');
    Route::resource('/minutes', 'MinutesController');
    Route::resource('/minutes/participants', 'ParticipantsController');
    
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
