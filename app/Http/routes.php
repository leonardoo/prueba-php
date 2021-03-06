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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('capacitacion', 'CapacitacionController');
Route::resource('capacitador', 'CapacitadorController');
Route::resource('inscripcion', 'InscripcionController');
Route::get('inscripcion/{id}/confirm', ['as' => 'inscripcion_confirm', 'uses' => 'InscripcionController@confirm']);
