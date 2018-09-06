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
});
