<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('dicionario', ['as' => 'dicionario.store', 'uses' => 'Admin\ApiController@dictionary']);
Route::post('ingredientes/revisao', ['as' => 'ingredientes.revisao', 'uses' => 'Admin\ApiController@ingredientsReview']);
Route::get('distribuidores/nota/{fornecedorId}/{id}', ['as' => 'distribuidores.nota', 'uses' => 'Admin\ApiController@getDistributorsNote']);
Route::post('receitas/busca', ['as' =>'admin.receitas.find','uses' => 'Admin\ApiController@findRecipe']);