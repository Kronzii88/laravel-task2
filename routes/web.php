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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'HomeController@index');

//cast
// Route::get('/cast', 'CastController@index');
// Route::get('/cast/create', 'CastController@create');
// Route::post('/cast', 'CastController@store');
// Route::get('/cast/{id}', 'CastController@show');
// Route::get('/cast/{id}/edit', 'CastController@edit');
// Route::put('/cast/{id}', 'CastController@update');
// Route::delete('/cast/{id}', 'CastController@destroy');

// route resource
Route::resource('cast', 'CastController');