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

Route::get('/', 'PageController@index')->name('home');

Route::get('/articulos', function (){
	echo "Your name is" ;
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'users.destroy'

	]);

	Route::resource('categorias', 'CategoriasController');
	Route::get('categorias/{id}/destroy', [
	
		'uses' => 'CategoriasController@destroy',
		'as' => 'categorias.destroy'


	]);

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
	
		'uses' => 'TagsController@destroy',
		'as' => 'tags.destroy'


	]);

	Route::resource('articulos', 'ArticulosController');
	

});



	Route::get('/contacto', 'PageController@info')->name('info');

	Route::get('/galeria', 'PageController@galeria')->name('galeria');

	Route::get('auth/login', [
		'uses' => 'Auth\LoginController@showLoginForm',
		'as'   =>  'auth.login'


	]);

	Route::post('auth/login', [
		'uses' => 'Auth\LoginController@login',
		'as'   =>  'auth.login'


	]);
	
	Route::get('auth/logout', [
		'uses' => 'Auth\LoginController@logout',
		'as'   =>  'auth.logout'


	]);



