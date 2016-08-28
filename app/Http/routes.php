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

Route::get('/', 'HomeController@index');
Route::get('/products/view/{title}', 'HomeController@view');
Route::get('/products', 'HomeController@view_products');
Route::get('/products/{category}', 'HomeController@products');
Route::get('/galleries', 'HomeController@gallery');
Route::get('/contact', 'HomeController@contact');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function (){
    /* product route */
    Route::resource('product', 'ProductController', ['only' => ['index', 'store', 'create', 'update']]);
    Route::get('/product/search/{query}', 'ProductController@search');
    Route::get('/', 'DashboardController@index');
    Route::get('/product/view/{id}', 'ProductController@view');
    Route::get('/product/enable/{id}', 'ProductController@enable_product');
    Route::get('/product/disable/{id}', 'ProductController@disable_product');
    Route::get('/product/edit/{id}', 'ProductController@edit');
    Route::put('/product', 'ProductController@update');
    Route::controller('product', 'ProductController', [
    'anyData'  => 'datatables.data'
    ]);

    /* category route */

    Route::resource('master', 'MasterController', ['only' => ['index', 'store', 'create']]);
    Route::controller('master', 'MasterController', [
    'get_data_user'  => 'test.data'
    ]);

    /* user route */

    Route::resource('user', 'UserController', ['only' => ['index', 'store']]);
    Route::controller('user', 'UserController', [
    'getDataUser'  => 'user.data'
    ]);

    /* category route */

    Route::resource('category', 'CategoryController', ['only' => ['index', 'create', 'store', 'update']]);
    Route::get('/category/enable/{id}', 'CategoryController@enable');
    Route::get('/category/disable/{id}', 'CategoryController@disable');
    Route::get('/category/edit/{id}', 'CategoryController@edit');

    Route::controller('category', 'CategoryController', [
    'getDataCategory'  => 'catagories.data'
    ]);
});