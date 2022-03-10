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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/main', 'HomeController@index')->name('main');

Route::get('/product', function() {
    return view('Products.ProductIndex');
});

Route::get('/videos', function() {
    return view('Video.Video');
});