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

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
//DATA-TABLE CATEDRATICOS 
Route::get('api/users', function(){
 	return Datatables::eloquent(App\User::query())->make(true);
});

Route::get('api/encargados', function(){
 	return Datatables::eloquent(App\Encargado::query())->make(true);
});

Route::get('api/alumnos', function(){
 	return Datatables::eloquent(App\Alumno::query())->make(true);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	/*
	*** Users
	*/
	Route::get('/catedraticos', [
		'uses'	=> 'UserController@index',
		'as'	=> 'admin.list.maestros'	
	]);

	Route::get('/nuevocatedratico', [
		'uses'	=> 'UserController@create',
		'as'	=> 'admin.create.maestros'
	]);

	Route::post('/nuevocatedratico/guardar', [
		'uses'	=> 'UserController@store',
		'as'	=> 'admin.store.maestros'
	]);

	Route::get('/vercatedratico/{id}', [
		'uses'	=> 'UserController@show',
		'as'	=> 'admin.show.maestros'
	]);

	Route::get('/editarcatedratico/{id}', [
		'uses'	=> 'UserController@edit',
		'as'	=> 'admin.edit.maestros'
	]);

	/*
	*** Encargados
	*/
	Route::get('/encargados', [
		'uses'	=> 'EncargadoController@index',
		'as' 	=> 'admin.index.encargados'
	]);

	Route::get('/nuevoencargado', [
		'uses'	=> 'EncargadoController@create',
		'as'	=> 'admin.create.encargados'
	]);

	Route::post('/nuevoencargado/guardar', [
		'uses'	=> 'EncargadoController@store',
		'as'	=> 'admin.store.encargados'
	]);

	Route::get('/verencargado/{id}', [
		'uses'	=> 'EncargadoController@show',
		'as'	=> 'admin.show.encargados'
	]);

	Route::get('/editarencargado/{id}', [
		'uses'	=> 'EncargadoController@edit',
		'as'	=> 'admin.edit.encargados'
	]);

	/*
	*** Alumnos
	*/
	Route::get('/alumnos', [
		'uses'	=> 'AlumnoController@index',
		'as'	=> 'admin.index.alumnos'
	]);

	Route::get('/nuevoalumno', [
		'uses'	=> 'AlumnoController@create',
		'as'	=> 'admin.create.alumnos'
	]);

	Route::get('/veralumno/{id}', [
		'uses'	=> 'AlumnoController@show',
		'as'	=> 'admin.show.alumnos'
	]);

	Route::get('/editaralumno/{id}', [
		'uses'	=> 'AlumnoController@edit',
		'as'	=> 'admin.edit.alumnos'
	]);
});
