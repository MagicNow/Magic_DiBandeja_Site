<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Grupos;
use App\Models\Ingredientes_grupos;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class GruposController extends Controller {
	public function index() {
		if (Auth::check()) { 
		   $grupos = Grupos::orderby('id', 'desc')->get();

		   return view('admin.grupos.list', compact('grupos'));
		} else {
			return view('auth.login');
		}
	}

	public function listItems() {
		$dados = Input::all();
		$image = asset('assets/images/blank.png');

		if (isset($dados['mt_filter'])) {
			$grupos = Grupos::where('nome', 'LIKE', '%' . $dados['mt_filter'] . '%')
									->selectRaw('nome AS name, id, "" AS description, "' . $image . '" AS picture_path')
									->get();

			if (count($grupos) === 0) {
				return response()->json(['results' => [], 'status' => 'empty', 'message' => '<a href="' . route('admin.grupos.create', ['type' => 'modal']) . '" class="register-modal" data-toggle="modal" data-target="#register">Cadastre um novo grupo</a>']);
			} else {
				return response()->json(['results' => $grupos, 'status' => 'ok']);
			}
		} else {
			return response()->json(['results' => [], 'status' => 'empty']);
		}
	}

	public function create(){
		return view('admin.grupos.create');
	}

	public function edit($id = null){
		$grupo = Grupos::find($id);
	   
		return view('admin.grupos.create',compact('grupo'));
	}

	public function destroy($id = null){
		Ingredientes_grupos::where('grupo_id',$id)->delete();

		$grupos = Grupos::find($id);
		
		$grupos->delete();
		return Redirect::route('admin.grupos')->with('sucess', 'Registro apagado com sucesso!');;
	}

	public function store($id = null){
		$dados = Input::all();

		if($id){
			$rules = array(
				'nome' =>'required|unique:grupos,nome'

			);
			$msg = "Registro alterado com sucesso!";
		} else {
		   $rules = array(
				'nome'      =>'required|unique:grupos,nome,'.$id
			 ); 
		   $msg = "Cadastro efetuado com sucesso!";
		}

		$validator = Validator::make($dados,$rules);

		if(!$validator->fails()){

			if($id){
				$grupos = Grupos::find($id);
			} else {
				$grupos = new Grupos;
			}

			$grupos->nome = $dados['nome'];          
			$grupos->save();

			if (isset($dados['type']) && $dados['type'] === 'modal') {
				$return = array();
				$return[] = $msg;
				return response()->json(['success' => true, 'message' => $return]);
			} else {
				return Redirect::route('admin.grupos')->with('sucess', $msg);
			}
		} else {
			if (isset($dados['type']) && $dados['type'] === 'modal') {
				return response()->json(['success' => false, 'message' => $validator->errors()->all(), 'fields' => $dados]);
			} else {
				return Redirect::route('admin.grupos.create')
					->withErrors($validator)
					->withInput();
			}
		}
	}
   

	
}