<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('as' => 'index' , 'uses' => 'HomeController@showLogin'));
Route::get('/login', array('as' => 'showLogin' , 'uses' => 'HomeController@showLogin'));

Route::post('/login', array('as' => 'login' , 'uses' => 'HomeController@login'));
Route::get('/logout', array('as' => 'logout' , 'uses' => 'HomeController@logout'));

Route::get('/info',function()
{
	phpinfo();
});

Route::get('/menu',array('as' => 'menu' , 'uses' => 'ProgramacionController@mostrarMenuSemanal'));

Route::group(array('before' => 'auth'),function(){
	Route::get('/menu/cargar',array('as' => 'menuCargar' , 'uses' => 'NutricionistaController@ingresarMenuSemanal'));
	Route::post('/menu/cargar',array('as' => 'menuCargarPost' , 'uses' => 'NutricionistaController@guardarMenuSemanal'));
	Route::post('/menu',array('as' => 'reservar', 'uses' => 'ComensalController@reservar'));
	Route::get('/reservar/almuerzo/{menu_id}/{turno_id}',array('as' => 'reservarAlmuerzo', 'uses' => 'ComensalController@reservarAlmuerzo'));
	Route::get('/reservar/cena/{menu_id}/{turno_id}',array('as' => 'reservarCena', 'uses' => 'ComensalController@reservarCena'));
});

