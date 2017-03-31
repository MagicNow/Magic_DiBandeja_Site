<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Distribuidores;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class DistribuidoresController extends Controller {
	public function index() {
		if (Auth::check()) { 
		   $distribuidores = Distribuidores::orderby('id', 'desc')->get();

		   return view('admin.distribuidores.list', compact('distribuidores'));
		} else {
			return view('auth.login');
		}
	}

	public function listItems() {
		$dados = Input::all();
		$image = asset('assets/images/blank.png');

		if (isset($dados['mt_filter'])) {
			$distribuidores = Distribuidores::where('nome', 'LIKE', '%' . $dados['mt_filter'] . '%')
									->selectRaw('nome AS name, id, "" AS description, "" AS picture_path')
									->get();

			if (count($distribuidores) === 0) {
				return response()->json(['results' => [], 'status' => 'empty', 'message' => '<a href="' . route('admin.distribuidores.create', ['type' => 'modal']) . '" class="register-inline" data-target="#register">Cadastre um novo distribuidor</a>']);
			} else {
				return response()->json(['results' => $distribuidores, 'status' => 'ok']);
			}
		} else {
			return response()->json(['results' => [], 'status' => 'empty']);
		}
	}

	public function create(){
		$delivery = [
			'sim' => 'checked',
			'nao' => ''
		];

		$venda_online = [
			'sim' => 'checked',
			'nao' => ''
		];

		return view('admin.distribuidores.create', compact('delivery', 'venda_online'));
	}

	public function edit($id = null){
		$distribuidor = Distribuidores::find($id);

		$delivery = [
			'sim' => $distribuidor->delivery === 'sim' ? 'checked' : '',
			'nao' => $distribuidor->delivery === 'não' ? 'checked' : ''
		];

		$venda_online = [
			'sim' => $distribuidor->venda_online === 'sim' ? 'checked' : '',
			'nao' => $distribuidor->venda_online === 'não' ? 'checked' : ''
		];

		return view('admin.distribuidores.create', compact('distribuidor', 'delivery', 'venda_online'));
	}

	public function destroy($id = null){
		$distribuidores = Distribuidores::find($id);
		
		$distribuidores->delete();
		return Redirect::route('admin.distribuidores')->with('sucess', 'Registro apagado com sucesso!');;
	}

	public function store($id = null){
		$dados = Input::all();
		$callback = isset($dados['callback']) ? $dados['callback'] : NULL;
		$return = '';

		if($id){
			$rules = array(
				'nome' =>'required|unique:distribuidores,nome,'.$id
			);
			$msg = "Registro alterado com sucesso!";
		} else {
		   $rules = array(
				'nome' =>'required|unique:distribuidores,nome'
			 ); 
		   $msg = "Cadastro efetuado com sucesso!";
		}

		$validator = Validator::make($dados, $rules);

		if(!$validator->fails()){
			if($id){
				$distribuidores = Distribuidores::find($id);
			} else {
				$distribuidores = new Distribuidores;
			}

			$distribuidores->nome = $dados['nome'];          
			$distribuidores->url = $dados['url'];
			$distribuidores->endereco = $dados['endereco'];
			$distribuidores->telefone = $dados['telefone'];
			$distribuidores->delivery = $dados['delivery'];
			$distribuidores->venda_online = $dados['venda_online'];
			$distribuidores->save();

			if (isset($dados['type']) && $dados['type'] === 'modal') {
				$return = array();
				$return[] = $msg;
				$return = response()->json(['success' => true, 'message' => $return, 'id' => $distribuidores->id]);
			} else {
				$return = Redirect::route('admin.distribuidores')->with('sucess', $msg);
			}
		} else {
			if (isset($dados['type']) && $dados['type'] === 'modal') {
				$return = response()->json(['success' => false, 'message' => $validator->errors()->all(), 'fields' => $dados]);
			} else {
				$return = back()
					->withErrors($validator)
					->withInput();
			}
		}

		if ($callback === 'text') {
			die($return);
		} else {
			return $return;
		}
	}	
}