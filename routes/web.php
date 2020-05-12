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


Route::get('/', 'ProdukController@index' );

Route::get('/list-produk', 'ProdukController@index');

Route::post('/store-produk', 'ProdukController@store');

Route::get('/create-produk', 'ProdukController@create');

Route::get('/show-produk/{product}', 'ProdukController@show');

Route::get('/edit-produk/{product}', 'ProdukController@edit');

Route::get('/delete-produk/{product}', 'ProdukController@delete');

Route::post('/update-produk', 'ProdukController@update');

