<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
// Route::resource('dashboard', 'DashboardController', ['only' => ['index']]);
// Route::resource('product', 'ProductController');
Route::group(['prefix' => 'admin'], function (){
    /* product route */
    Route::resource('product', 'ProductController', ['only' => ['index', 'store', 'create']]);
    Route::get('/product/search/{query}', 'ProductController@search');
    Route::get('/', 'DashboardController@index');
    Route::get('/product/view/{id}', 'ProductController@view');
    Route::get('/product/enable/{id}', 'ProductController@enable_product');
    Route::get('/product/disable/{id}', 'ProductController@disable_product');
    Route::controller('product', 'ProductController', [
    'anyData'  => 'datatables.data'
    ]);

    /* category route */

    Route::resource('master', 'MasterController', ['only' => ['index', 'store', 'create']]);
    Route::controller('master', 'MasterController', [
    'get_data_user'  => 'test.data'
    ]);
});