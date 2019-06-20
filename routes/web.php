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

Route::group(['prefix' => 'admin/orders','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::get('/salesinyear','OrdersController@salesInYear')->name('orders.salesinyear');
    Route::get('/bestsellers','OrdersController@getBestSellers')->name('orders.bestsellers');
});

Route::group(['prefix' => 'admin/athletic','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::get('/data','AthleticDataController@index')->name('athletic_data.index');
    Route::post('/data','AthleticDataController@store')->name('athleticdatas.store');
    Route::put('/data/{id}','AthleticDataController@update')->name('athleticdatas.update');


});

Route::group(['prefix' => 'admin/products','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'ProductsController@index')->name('products');
    Route::get('/create', 'ProductsController@create')->name('products.create');
    Route::post('/create', 'ProductsController@store')->name('products.store');
    Route::get('/block/{product}', 'ProductsController@block')->name('products.block');
    Route::get('/unblock/{product}', 'ProductsController@unblock')->name('products.unblock');
    Route::get('/find/{id}', 'ProductsController@productInStock')->name('products.findinstock');
});


Route::group(['prefix' => 'admin/stock','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'StockController@index')->name('stocks');
    Route::post('/store', 'StockController@store')->name('stocks.store');
    Route::get('/input','StockController@input')->name('stocks.input');
    Route::post('/input','StockController@store')->name('stocks.input');
    Route::get('/output','StockController@output')->name('stocks.output');
    Route::post('/output','StockController@store')->name('stocks.output');
    Route::get('/find/{id}','StockController@findProductById')->name('stocks.findbyid');
    Route::get('/find_stock/{id}','StockController@findStockById')->name('stocks.findbyid');
});

Route::group(['prefix' => 'admin/minutes','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'MinutesController@index')->name('minutes.index');
    Route::post('/participants/store', 'ParticipantsMinutesController@store')->name('minutes.participants.store');
    Route::post('/schedule/store', 'ScheduleMinutesController@store')->name('minutes.schedule.store');
});

Route::group(['prefix' => 'admin/orders','namespace'=>'Admin', 'middleware' => 'auth'], function () {
    Route::post('/store', 'OrdersController@store')->name('orders.store');
    Route::get('/store', 'OrdersController@store')->name('orders.store');
    Route::get('/{id_order}/generate_pdf', 'OrdersController@generate_pdf')->name('orders.generate_pdf');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
});

Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::resource('/products/config', 'ProductsOptionsTypesController');
    Route::resource('/products', 'ProductsController');
    Route::resource('/stock', 'StockController');
    Route::resource('/minutes', 'MinutesController');
    Route::resource('/minutes/participants', 'ParticipantsMinutesController');
    Route::resource('/minutes/schedules', 'ScheduleMinutesController');
    Route::resource('/orders', 'OrdersController');
    Route::resource('/last_photos_eng', 'LastPhotosEngController');
    Route::resource('/team_eng', 'TeamEngController');
    Route::resource('/athletic_teams', 'AthleticTeamsController');
    Route::resource('/last_photos_athletic', 'LastPhotosAthleticController');
    Route::resource('/news_athletic', 'NewsAthleticController');

    
    Auth::routes();
    \AgenciaMaior\LaravelBoilerplate\LaravelBoilerplateServiceProvider::routes();
});


Route::group(['prefix'=>'centro_academico'],function(){
    Route::get('/','HomeCAController@index')->name("ca.home");
});


Route::group(['prefix'=>'atletica'],function(){
    Route::get('/','HomeAthleticController@index')->name("atletica.home");
    Route::get('/noticia/{id}','Admin\NewsAthleticController@show')->name("atletica.show");

    Route::get('/loja',function(){
        return view('atletica.loja.index');
    })->name("atletica.loja");

    Route::get('/loja/pedido_realizado',function(){
        return view('atletica.loja.finalized');
    })->name("atletica.loja.finalized");
});
