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

// pizza routes
Route::get('/beverages', 'BeverageController@index')->middleware('auth');
Route::get('/beverages/create', 'BeverageController@create');
Route::post('/beverages', 'BeverageController@store');
Route::get('/beverages/{id}', 'BeverageController@show')->middleware('auth');
Route::delete('/beverages/{id}', 'BeverageController@destroy')->middleware('auth'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');