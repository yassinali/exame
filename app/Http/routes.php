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

/*Route::get('/', 'WelcomeController@index');*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('participantes', 'ParticipanteController');

Route::get('participantes/{id}/delete', [
    'as' => 'participantes.delete',
    'uses' => 'ParticipanteController@destroy',
]);


Route::resource('promotors', 'PromotorController');

Route::get('promotors/{id}/delete', [
    'as' => 'promotors.delete',
    'uses' => 'PromotorController@destroy',
]);


Route::resource('eventos', 'EventosController');

Route::get('eventos/{id}/delete', [
    'as' => 'eventos.delete',
    'uses' => 'EventosController@destroy',
]);


Route::resource('promotores', 'promotoresController');

Route::get('promotores/{id}/delete', [
    'as' => 'promotores.delete',
    'uses' => 'promotoresController@destroy',
]);


Route::resource('students', 'StudentController');

Route::get('students/{id}/delete', [
    'as' => 'students.delete',
    'uses' => 'StudentController@destroy',
]);


Route::resource('testees', 'TesteeController');

Route::get('testees/{id}/delete', [
    'as' => 'testees.delete',
    'uses' => 'TesteeController@destroy',
]);
