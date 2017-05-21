<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Fornecedores;
use App\Models\Fornecedores_ingredientes;
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

	public function listItems() {
		$dados = Input::all();
		$image = asset('upload/fornecedores');

		if (isset($dados['mt_filter'])) {
			$fornecedores = Fornecedores::where('nome', 'LIKE', '%' . $dados['mt_filter'] . '%')
									->selectRaw('nome AS name, id, "" AS description, CONCAT("' . $image . '/", imagem) AS picture_path')
									->get();

			foreach ($fornecedores as $key => $fornecedor) {
				if (empty($fornecedor->picture_path)) {
					$fornecedor->picture_path = asset('assets/images/blank.png');
				}
			}

			if (count($fornecedores) === 0) {
				return response()->json(['results' => [], 'status' => 'empty', 'message' => '<a href="' . route("admin.fornecedores.create", ["type" => "modal"]) . '" class="register-modal" data-toggle="modal" data-target="#register">Cadastre um novo fornecedor</a>']);
			} else {
				return response()->json(['results' => $fornecedores, 'status' => 'ok']);
			}
		} else {
			return response()->json(['results' => [], 'status' => 'empty']);
		}
	}

	public function create(){
		return view('admin.fornecedores.create');
	}

	public function edit($id = null){
		$fornecedor = Fornecedores::find($id);
        $distribuidores = [];

        foreach ($fornecedor->distribuidores as $key => $value) {
            $distribuidores[$value->id] = $value->nome;
        }
        $distribuidores = json_encode($distribuidores, JSON_UNESCAPED_UNICODE);

		// foreach ($fornecedor->distribuidores as $key => $fornecedor) {
		//  	dd($fornecedor->pivot->nota);
		// }

		return view('admin.fornecedores.create',compact('fornecedor', 'distribuidores'));

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
				'razao_social' =>'required|unique:fornecedores,razao_social,'.$id

			);
			$msg = "Registro alterado com sucesso!";
		}else{
		   $rules = array(
				'razao_social' =>'required|unique:fornecedores,razao_social,'.$id
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

			$fornecedores->razao_social = $dados['razao_social'];
			$fornecedores->nome = $dados['nome'];
			$fornecedores->url = $dados['url'];
			$fornecedores->especialidade = $dados['especialidade'];
			$fornecedores->cotacao = $dados['cotacao'];
			$fornecedores->endereco = $dados['endereco'];
			$fornecedores->complemento = $dados['complemento'];
			$fornecedores->bairro = $dados['bairro'];
			$fornecedores->cidade = $dados['cidade'];
			$fornecedores->estado = $dados['estado'];
			$fornecedores->pais = $dados['pais'];
			$fornecedores->cep = $dados['cep'];
			$fornecedores->telefone = $dados['telefone'];
			$fornecedores->nota = $dados['nota'];
			
			$image = Input::file('image');
			if(isset($image)){
				$fileName = md5(str_random(60)).'.'.strtolower($image->getClientOriginalExtension());
				Input::file('image')->move(public_path('upload/fornecedores'), $fileName);
				
				$fornecedores->imagem = $fileName; 
			}

			if ($fornecedores->save()) {
				$fornecedores->distribuidores()->detach();

				if (isset($dados['distribuidores']) && !isset($dados['distribuicao_direta'])) {
					foreach ($dados['distribuidores'] as $dist) {
						$nota = $dados['nota-distribuidor'][$dist];
						$fornecedores->distribuidores()->attach($dist, ['nota' => $nota]);
					}
				}

				if (isset($dados['type']) && $dados['type'] === 'modal') {
					$return = array();
					$return[] = $msg;
					return response()->json(['success' => true, 'message' => $return]);
				} else {
					return Redirect::route('admin.fornecedores')->with('sucess', $msg);
				}
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