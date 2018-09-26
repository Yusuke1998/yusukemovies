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

Route::get('/',[
	'as'	=>	'index',
	'uses'	=>	'GeneralController@indexPublic'
]);

Route::group(['prefix' => 'admin'],function(){
	Route::get('',
		[
			'as' 	=> 	'admin.index',
			'uses'	=>	'AdminController@indexAdmin',
	]);
	Route::resource('actor','ActorsController');
	Route::resource('usuario','UsersController');
	Route::resource('director','DirectorsController');
	Route::resource('pelicula','MoviesController');
	Route::resource('categoria','CategoriesController');
	Route::resource('tag','TagsController');
	Route::resource('poster','PostersController');
});

Route::group([
	'prefix'	=>	'ymovies'],function(){
		Route::get('Pedidos',[
			'as'	=>	'pedidos',
			'uses'	=>	'GeneralController@pedidos'
		]);
		Route::get('Sugerencias',[
			'as'	=>	'sugerencias',
			'uses'	=>	'GeneralController@sugerencias'
		]);
		Route::get('Contacto',[
			'as'	=>	'contacto',
			'uses'	=>	'GeneralController@contacto'
		]);
		Route::get('Peliculas',[
			'as'	=>	'peliculas',
			'uses'	=>	'GeneralController@peliculas'
		]);
		Route::get('Peliculas/{id}',[
			'as'	=>	'peliculas.id',
			'uses'	=>	'GeneralController@peliculasid'
		]);

		Route::get('Categorias/{id}',[
			'as'	=>	'categoria.id',
			'uses'	=>	'GeneralController@categoriasid'
		]);

		Route::get('Actores/{id}',[
			'as'	=>	'actor.id',
			'uses'	=>	'GeneralController@actorid'
		]);

		Route::get('Directores/{id}',[
			'as'	=>	'director.id',
			'uses'	=>	'GeneralController@directorid'
		]);

		Route::get('Categorias',[
			'as'	=>	'categorias',
			'uses'	=>	'GeneralController@categorias'
		]);

		Route::get('CategoriasAño',[
			'as'	=>	'categoriayaño',
			'uses'	=>	'GeneralController@categoria_año'
		]);

		Route::get('Actores',[
			'as'	=>	'actores',
			'uses'	=>	'GeneralController@actores'
		]);
		Route::get('Directores',[
			'as'	=>	'directores',
			'uses'	=>	'GeneralController@directores'
		]);
		Route::post('Pelicula/comentario/{iduser}/{idmovie}',[
			'as'	=>	'comentario',
			'uses'	=>	'CommentariesController@store'
		]);
	});

Auth::routes();
