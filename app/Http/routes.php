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
Route::get('/RegistroEgresados','ProyectoController@RegistroEgresados');
Route::get('/registro','ProyectoController@Registro');
Route::get('/master','ProyectoController@master');
Route::get('/principal','ProyectoController@principal');
Route::get('/principal','ProyectoController@RedireccionLogin');
