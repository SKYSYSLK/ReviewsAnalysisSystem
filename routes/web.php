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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home/review', 'HomeController@postReview');

Route::get('/rooms', 'RoomsController@index');

Route::get('/services', 'ServicesController@index');

Route::get('/foods', 'FoodsController@index');

Route::get('/facilities', 'FacilitiesController@index');
