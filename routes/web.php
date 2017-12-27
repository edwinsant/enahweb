<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| post,get,put, delete, patch, options
*/

Route::get('controlador','PruebaController@index');
Route::get('controlador/{nombre}','PruebaController@name');

Route::resource('persona','PersonaController');

Route::get('prueba',function(){
	return "hola mundo desde web.php";
});

Route::get('nombre/{nombre}',function($nombre){
	return "my name is ".$nombre;
});

Route::get('/', function () {
    return view('welcome');
});
