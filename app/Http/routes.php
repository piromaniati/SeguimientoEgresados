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

Route::get('/principal','ProyectoController@principal');
Route::get('/RegistroEgresados','ProyectoController@RegistroEgresados');
Route::get('/registro','ProyectoController@Registro');
Route::get('/','ProyectoController@master');
Route::get('/principal','ProyectoController@principal');
Route::get('/instituciones','ProyectoController@AccederInstitucion');
Route::get('/Egresados','ProyectoController@AccederEgresados');