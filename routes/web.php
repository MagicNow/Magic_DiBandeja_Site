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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/dibandeja-para-voce', ['as' => 'dibandeja-pra-voce', 'uses' => 'HomeController@dibandeja_para_voce']);
Route::get('/sobre', ['as' => 'sobre', 'uses' => 'HomeController@sobre']);
Route::get('/contato', ['as' => 'contato', 'uses' => 'HomeController@contato']);
Route::get('/fornecedor', ['as' => 'fornecedor', 'uses' => 'HomeController@fornecedor']);
Route::get('/parceiro', ['as' => 'parceiro', 'uses' => 'HomeController@parceiro']);
Route::get('/participe', ['as' => 'participe', 'uses' => 'HomeController@participe']);

Route::group(['prefix' => 'faca-um-pedido'], function() {
	Route::group(['prefix' => 'para-a-sua-casa'], function() {
		Route::get('/', ['as' => 'cliente.pf', 'uses' => 'HomeController@clientePF']);
		Route::post('/store', ['as' => 'cliente.pf.store', 'uses' => 'HomeController@storeClientePF']);
	});

	Route::group(['prefix' => 'para-o-seu-negocio'], function() {
		Route::get('/', ['as' => 'cliente.pj', 'uses' => 'HomeController@clientePJ']);
		Route::post('/store', ['as' => 'cliente.pj.store', 'uses' => 'HomeController@storeClientePJ']);
	});
});

Route::post('/contato/store', ['as' => 'contato.store', 'uses' => 'HomeController@storeContato']);
Route::post('/fornecedor/store', ['as' => 'fornecedor.store', 'uses' => 'HomeController@storeFornecedor']);
Route::post('/parceiro/store', ['as' => 'parceiro.store', 'uses' => 'HomeController@storeParceiro']);


Route::group(['prefix' => 'admin'], function() {
	Auth::routes();
	Route::get('logout', 'Auth\LoginController@logout');

	// Route::get('/home', ['as'=> 'admin.index','uses' => 'Admin\AdminController@index']);
	// Route::get('login', ['as'=> 'admin.login','uses' => 'Admin\AdminController@index']);
	// Route::post('login', ['uses' => 'Admin\AdminController@login']);
	// Route::get('logout', ['as'=> 'admin.logout','uses' => 'Admin\AdminController@logout']);


	Route::get('/ingredientes', ['as'=> 'admin.ingredientes','uses' => 'Admin\IngredientesController@index']);
	Route::post('ingredientes/store/{id?}', ['as' =>'admin.ingredientes.store','uses' => 'Admin\IngredientesController@store']);
	Route::get('ingredientes/create', ['as' =>'admin.ingredientes.create','uses' => 'Admin\IngredientesController@create']);
	Route::get('ingredientes/edit/{id}', ['as' =>'admin.ingredientes.edit','uses' => 'Admin\IngredientesController@edit']);
	Route::get('ingredientes/destroy/{id?}', ['as' =>'admin.ingredientes.destroy','uses' => 'Admin\IngredientesController@destroy']);


	Route::get('/receitas', ['as'=> 'admin.receitas','uses' => 'Admin\ReceitasController@index']);
	Route::post('receitas/store/{id?}', ['as' =>'admin.receitas.store','uses' => 'Admin\ReceitasController@store']);
	Route::get('receitas/create', ['as' =>'admin.receitas.create','uses' => 'Admin\ReceitasController@create']);
	Route::get('receitas/edit/{id}', ['as' =>'admin.receitas.edit','uses' => 'Admin\ReceitasController@edit']);
	Route::get('receitas/destroy/{id?}', ['as' =>'admin.receitas.destroy','uses' => 'Admin\ReceitasController@destroy']);


	Route::get('/caracteristicas', ['as'=> 'admin.caracteristicas','uses' => 'Admin\CaracteristicasController@index']);
	Route::post('caracteristicas/store/{id?}', ['as' =>'admin.caracteristicas.store','uses' => 'Admin\CaracteristicasController@store']);
	Route::get('caracteristicas/create', ['as' =>'admin.caracteristicas.create','uses' => 'Admin\CaracteristicasController@create']);
	Route::post('caracteristicas/list', ['as' =>'admin.grupos.list','uses' => 'Admin\CaracteristicasController@list']);
	Route::get('caracteristicas/edit/{id}', ['as' =>'admin.caracteristicas.edit','uses' => 'Admin\CaracteristicasController@edit']);
	Route::get('caracteristicas/destroy/{id?}', ['as' =>'admin.caracteristicas.destroy','uses' => 'Admin\CaracteristicasController@destroy']);

	Route::get('/grupos', ['as'=> 'admin.grupos','uses' => 'Admin\GruposController@index']);
	Route::post('grupos/store/{id?}', ['as' =>'admin.grupos.store','uses' => 'Admin\GruposController@store']);
	Route::get('grupos/create', ['as' =>'admin.grupos.create','uses' => 'Admin\GruposController@create']);
	Route::post('grupos/list', ['as' =>'admin.grupos.list','uses' => 'Admin\GruposController@list']);
	Route::get('grupos/edit/{id}', ['as' =>'admin.grupos.edit','uses' => 'Admin\GruposController@edit']);
	Route::get('grupos/destroy/{id?}', ['as' =>'admin.grupos.destroy','uses' => 'Admin\GruposController@destroy']);

	Route::get('/fornecedores', ['as'=> 'admin.fornecedores','uses' => 'Admin\FornecedoresController@index']);
	Route::post('fornecedores/store/{id?}', ['as' =>'admin.fornecedores.store','uses' => 'Admin\FornecedoresController@store']);
	Route::get('fornecedores/create', ['as' =>'admin.fornecedores.create','uses' => 'Admin\FornecedoresController@create']);
	Route::post('fornecedores/list', ['as' =>'admin.fornecedores.list','uses' => 'Admin\FornecedoresController@list']);
	Route::get('fornecedores/edit/{id}', ['as' =>'admin.fornecedores.edit','uses' => 'Admin\FornecedoresController@edit']);
	Route::get('fornecedores/destroy/{id?}', ['as' =>'admin.fornecedores.destroy','uses' => 'Admin\FornecedoresController@destroy']);
});