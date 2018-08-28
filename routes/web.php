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

/*
*** Users
*/
Route::get('admin/maestros', [
	'uses'	=> 'UserController@index',
	'as'	=> 'admin.list.maestros'	
]);

Route::get('api/users', function(){
 	return Datatables::eloquent(App\User::query())->make(true);
});