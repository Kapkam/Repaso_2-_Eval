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
}) -> name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/locales','StarbucksController@index')->name('locales');
Route::get('/stuff','StuffController@index')->name('stuff');
Route::get('/clientes','CLienteController@index')->name('clientes');
Route::get('/cafes','CafesController@index')->name('cafes');

// Relaciones 1:1

// Relaciones 1:N
Route::get('/stuff/clientes/{id}','StuffController@listaClientes')->name('stuff.clientes');
// Relaciones M:N
Route::get('/cafes/locales/{id}','CafesController@listaLocales')->name('cafes.locales');
Route::get('/locales/cafes/{id}','StarbucksController@listaCafes')->name('local.cafes');
