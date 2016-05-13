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

//Route::get('/', function () {return view('welcome');});

Route::get('/','ProyectoController@principal');
<<<<<<< HEAD
Route::get('/RegistroEgresados','ProyectoController@RegistroEgresados');
=======
Route::get('/registro','ProyectoController@Registro');
>>>>>>> 2e1b2a6ac8e23926fd0d6a22229b740a8d9f019f
