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

 //asdfsadfsdfsfdsf
 Route::get ('/name/{name}/apellido/{ap?}', function ($name, $ap = 'apellido'){
 		return 'hola soy  '.$name. ' ' .$ap;
 });

Route::get ('/mi_ruta', function () {

	return 'hola mundo desde mi primera ruta en laravel';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/articulos', 'ArticulosController@index');

Route::get('/articulos', 'ArticulosController@index');