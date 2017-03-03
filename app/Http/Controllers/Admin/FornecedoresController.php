<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Fornecedores;
use App\Models\Fornecedores_Ingredientes;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class FornecedoresController extends Controller {
	public function index() {
		if (Auth::check()) {
		   $fornecedores = Fornecedores::orderby('id', 'desc')->get();

		   return view('admin.fornecedores.list',compact('fornecedores'));
		} else {
			return view('auth.login');
		}
	}

	public function list() {
		$dados = Input::all();

		$fornecedores = Fornecedores::where('razao_social', 'LIKE', '%' . $dados['q'] . '%')
								->select('razao_social AS text', 'id')
								->get();

		return response()->json($fornecedores);
	}

	public function create(){
		return view('admin.fornecedores.create');
	}

	public function edit($id = null){

		$fornecedor = Fornecedores::find($id);
		
		return view('admin.fornecedores.create',compact('fornecedor'));

	}
	public function destroy($id = null){
		Fornecedores_ingredientes::where('fornecedor_id',$id)->delete();
		$fornecedores = Fornecedores::find($id);
		
		$fornecedores->delete();
		return Redirect::route('admin.fornecedores')->with('sucess', 'Registro apagado com sucesso!');;
	}

	public function store($id = null){
		$dados = Input::all();

		if($id){
			$rules = array(
				'razao_social'      =>'required|unique:fornecedores,razao_social,'.$id

			);
			$msg = "Registro alterado com sucesso!";
		}else{
		   $rules = array(
				'razao_social'      =>'required|unique:fornecedores,razao_social,'.$id
			 ); 
		   $msg = "Cadastro efetuado com sucesso!";
		}

		$validator = Validator::make($dados,$rules);

		if(!$validator->fails()){

			if($id){
				$fornecedores = Fornecedores::find($id);
			} else {
				$fornecedores = new Fornecedores;
			}
			
			
			$fornecedores->razao_social         = $dados['razao_social'];
			$fornecedores->nome_fantasia        = $dados['nome_fantasia'];
			$fornecedores->url                     = $dados['url'];
			$fornecedores->especialidade                = $dados['especialidade'];
			$fornecedores->cotacao               = $dados['cotacao'];
			$fornecedores->endereco               = $dados['endereco'];
			$fornecedores->complemento               = $dados['complemento'];
			$fornecedores->bairro               = $dados['bairro'];
			$fornecedores->cidade               = $dados['cidade'];
			$fornecedores->estado               = $dados['estado'];
			$fornecedores->pais               = $dados['pais'];
			$fornecedores->cep               = $dados['cep'];
			$fornecedores->telefone               = $dados['telefone'];
			
			$image = Input::file('image');
			if(isset($image)){
				$fileName = md5(str_random(60)).'.'.strtolower($image->getClientOriginalExtension());
				Input::file('image')->move(public_path('upload/fornecedores'), $fileName);
				
				$fornecedores->imagem = $fileName; 
			}

			$fornecedores->save();

			if (isset($dados['type']) && $dados['type'] === 'modal') {
				$return = array();
				$return[] = $msg;
				return response()->json(['success' => true, 'message' => $return]);
			} else {
				return Redirect::route('admin.fornecedores')->with('sucess', $msg);
			}
		} else {
			if (isset($dados['type']) && $dados['type'] === 'modal') {
				return response()->json(['success' => false, 'message' => $validator->errors()->all(), 'fields' => $dados]);
			} else {
				return Redirect::route('admin.fornecedores.create')
					->withErrors($validator)
					->withInput();
			}
			
		}
	} 
}