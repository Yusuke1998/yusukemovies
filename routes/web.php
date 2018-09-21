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
    return view('Inicio');
});



Route::group(['prefix' => 'admin'],function(){
	Route::get('/index',
		[
			'as' 	=> 	'admin.index',
			'uses'	=>	'GeneralController@index',
	]);
	Route::resource('actor','ActorsController');
	Route::resource('usuario','UsersController');
	Route::resource('director','DirectorsController');
	Route::resource('pelicula','MoviesController');
	Route::resource('categoria','CategoriesController');
	Route::resource('tag','TagsController');
	Route::resource('poster','PostersController');
});
