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

Route::get('/', 'HomeController@welcome')->name('welcome');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Events */
Route::resource('events', 'EventController');

/* Donators */
Route::resource('donators', 'DonatorController');

/* Arrivals */
Route::resource('arrivals', 'ArrivalController');

/* Employees */
Route::resource('employees', 'EmployeeController');

/* Doses */
Route::resource('doses', 'DoseController');
Route::get('/doses/{id}/process', 'DoseController@process');
Route::get('/doses/{id}/donate', 'DoseController@donate');
Route::get('/doses/create/{id}', 'DoseController@create');


