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

Auth::routes(["register" => false]);

Route::get('/home', 'HomeController@index')->name('home');

// compañias
 	Route::get('/compania', 'CompaniesController@index')->name('compania');
	Route::get('/crear-compania', 'CompaniesController@create')->name('crear-compania');
	Route::post('/registrar-compania', 'CompaniesController@store')->name('registrar-compania');
	Route::get('/editar-compania/{id}', 'CompaniesController@edit')->name('editar-compania');
	Route::put('/update-compania/{id}', 'CompaniesController@update')->name('update-compania');
	Route::get('/eliminar-compania/{id}', 'CompaniesController@destroy')->name('eliminar-compania');

// empleados
 	Route::get('/empleado', 'EmployeesController@index')->name('empleado');
	Route::get('/crear-empleado', 'EmployeesController@create')->name('crear-empleado');
	Route::post('/registrar-empleado', 'EmployeesController@store')->name('registrar-empleado');
	Route::get('/editar-empleado/{id}', 'EmployeesController@edit')->name('editar-empleado');
	Route::put('/update-empleado/{id}', 'EmployeesController@update')->name('update-empleado');
	Route::get('/eliminar-empleado/{id}', 'EmployeesController@destroy')->name('eliminar-empleado');

// cambio de idioma
Route::get('lang/{lang}', 'LanguageController@swap')->name('lang.swap');