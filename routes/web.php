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

	Route::get('/ingredientes', ['as'=> 'admin.ingredientes','uses' => 'Admin\IngredientesController@index']);
	Route::get('ingrediente/{id}', ['as' =>'admin.ingredientes.show','uses' => 'Admin\IngredientesController@show']);
	Route::post('ingredientes/store/{id?}', ['as' =>'admin.ingredientes.store','uses' => 'Admin\IngredientesController@store']);
	Route::get('ingredientes/edit/{id}', ['as' =>'admin.ingredientes.edit','uses' => 'Admin\IngredientesController@edit']);
	Route::get('ingredientes/destroy/{id?}', ['as' =>'admin.ingredientes.destroy','uses' => 'Admin\IngredientesController@destroy']);
	Route::post('ingredientes/list', ['as' =>'admin.ingredientes.list','uses' => 'Admin\IngredientesController@listItems']);
	Route::get('ingredientes/create', ['as' =>'admin.ingredientes.create','uses' => 'Admin\IngredientesController@create']);


	Route::get('/receitas', ['as'=> 'admin.receitas','uses' => 'Admin\ReceitasController@index']);
	Route::post('receitas/categorias/list', ['as' =>'admin.receitas.categories','uses' => 'Admin\ReceitasController@listCategories']);
	Route::post('receitas/store/{id?}', ['as' =>'admin.receitas.store','uses' => 'Admin\ReceitasController@store']);
	Route::get('receitas/create', ['as' =>'admin.receitas.create','uses' => 'Admin\ReceitasController@create']);
	Route::get('receitas/edit/{id}', ['as' =>'admin.receitas.edit','uses' => 'Admin\ReceitasController@edit']);
	Route::get('receitas/destroy/{id?}', ['as' =>'admin.receitas.destroy','uses' => 'Admin\ReceitasController@destroy']);
	Route::get('receita/{id}', ['as' =>'admin.receitas.show','uses' => 'Admin\ReceitasController@show']);

	Route::get('/cardapios', ['as'=> 'admin.cardapios','uses' => 'Admin\CardapiosController@index']);
	Route::get('/cardapios/busca', ['as'=> 'admin.cardapios.busca','uses' => 'Admin\CardapiosController@search']);

	Route::get('/caracteristicas', ['as'=> 'admin.caracteristicas','uses' => 'Admin\CaracteristicasController@index']);
	Route::post('caracteristicas/store/{id?}', ['as' =>'admin.caracteristicas.store','uses' => 'Admin\CaracteristicasController@store']);
	Route::get('caracteristicas/create', ['as' =>'admin.caracteristicas.create','uses' => 'Admin\CaracteristicasController@create']);
	Route::post('caracteristicas/list', ['as' =>'admin.grupos.list','uses' => 'Admin\CaracteristicasController@listItems']);
	Route::get('caracteristicas/edit/{id}', ['as' =>'admin.caracteristicas.edit','uses' => 'Admin\CaracteristicasController@edit']);
	Route::get('caracteristicas/destroy/{id?}', ['as' =>'admin.caracteristicas.destroy','uses' => 'Admin\CaracteristicasController@destroy']);

	Route::get('/grupos', ['as'=> 'admin.grupos','uses' => 'Admin\GruposController@index']);
	Route::post('grupos/store/{id?}', ['as' =>'admin.grupos.store','uses' => 'Admin\GruposController@store']);
	Route::get('grupos/create', ['as' =>'admin.grupos.create','uses' => 'Admin\GruposController@create']);
	Route::post('grupos/list', ['as' =>'admin.grupos.list','uses' => 'Admin\GruposController@listItems']);
	Route::get('grupos/edit/{id}', ['as' =>'admin.grupos.edit','uses' => 'Admin\GruposController@edit']);
	Route::get('grupos/destroy/{id?}', ['as' =>'admin.grupos.destroy','uses' => 'Admin\GruposController@destroy']);

	Route::get('/fornecedores', ['as'=> 'admin.fornecedores','uses' => 'Admin\FornecedoresController@index']);
	Route::post('fornecedores/store/{id?}', ['as' =>'admin.fornecedores.store','uses' => 'Admin\FornecedoresController@store']);
	Route::get('fornecedores/create', ['as' =>'admin.fornecedores.create','uses' => 'Admin\FornecedoresController@create']);
	Route::post('fornecedores/list', ['as' =>'admin.fornecedores.list','uses' => 'Admin\FornecedoresController@listItems']);
	Route::get('fornecedores/edit/{id}', ['as' =>'admin.fornecedores.edit','uses' => 'Admin\FornecedoresController@edit']);
	Route::get('fornecedores/destroy/{id?}', ['as' =>'admin.fornecedores.destroy','uses' => 'Admin\FornecedoresController@destroy']);

	Route::get('/distribuidores', ['as'=> 'admin.distribuidores','uses' => 'Admin\DistribuidoresController@index']);
	Route::post('distribuidores/store/{id?}', ['as' =>'admin.distribuidores.store','uses' => 'Admin\DistribuidoresController@store']);
	Route::get('distribuidores/create', ['as' =>'admin.distribuidores.create','uses' => 'Admin\DistribuidoresController@create']);
	Route::post('distribuidores/list', ['as' =>'admin.distribuidores.list','uses' => 'Admin\DistribuidoresController@listItems']);
	Route::get('distribuidores/edit/{id}', ['as' =>'admin.distribuidores.edit','uses' => 'Admin\DistribuidoresController@edit']);
	Route::get('distribuidores/destroy/{id?}', ['as' =>'admin.distribuidores.destroy','uses' => 'Admin\DistribuidoresController@destroy']);

	Route::get('fontes', ['as'=> 'admin.fontes','uses' => 'Admin\FontesController@index']);
	Route::post('fontes/store/{id?}', ['as' =>'admin.fontes.store','uses' => 'Admin\FontesController@store']);
	Route::get('fontes/create', ['as' =>'admin.fontes.create','uses' => 'Admin\FontesController@create']);
	Route::get('fontes/edit/{id}', ['as' =>'admin.fontes.edit','uses' => 'Admin\FontesController@edit']);
	Route::get('fontes/destroy/{id?}', ['as' =>'admin.fontes.destroy','uses' => 'Admin\FontesController@destroy']);
	Route::post('fontes/list', ['as' =>'admin.fontes.list','uses' => 'Admin\FontesController@listItems']);

	Route::get('/clientes', ['as'=> 'admin.clientes','uses' => 'Admin\ClientesController@index']);
	Route::post('clientes/store/{id?}', ['as' =>'admin.clientes.store','uses' => 'Admin\ClientesController@store']);
	Route::get('clientes/create', ['as' =>'admin.clientes.create','uses' => 'Admin\ClientesController@create']);
	Route::post('clientes/list', ['as' =>'admin.clientes.list','uses' => 'Admin\ClientesController@listItems']);
	Route::get('clientes/edit/{id}', ['as' =>'admin.clientes.edit','uses' => 'Admin\ClientesController@edit']);
	Route::get('clientes/destroy/{id?}', ['as' =>'admin.clientes.destroy','uses' => 'Admin\ClientesController@destroy']);

	Route::get('/parceiros', ['as'=> 'admin.parceiros','uses' => 'Admin\ParceirosController@index']);
	Route::post('parceiros/store/{id?}', ['as' =>'admin.parceiros.store','uses' => 'Admin\ParceirosController@store']);
	Route::get('parceiros/create', ['as' =>'admin.parceiros.create','uses' => 'Admin\ParceirosController@create']);
	Route::post('parceiros/list', ['as' =>'admin.parceiros.list','uses' => 'Admin\ParceirosController@listItems']);
	Route::get('parceiros/edit/{id}', ['as' =>'admin.parceiros.edit','uses' => 'Admin\ParceirosController@edit']);
	Route::get('parceiros/destroy/{id?}', ['as' =>'admin.parceiros.destroy','uses' => 'Admin\ParceirosController@destroy']);
});
