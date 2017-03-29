<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Caracteristicas;
use App\Models\Ingredientes_caracteristicas;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class CaracteristicasController extends Controller {


	public function index() {
		if (Auth::check()) {
		   $caracteristicas = Caracteristicas::orderby('id', 'desc')->get();

		   return view('admin.caracteristicas.list',compact('caracteristicas'));
		} else {
			return view('auth.login');
		}
	}

	public function create(){       
		return view('admin.caracteristicas.create');
	}

	public function listItems() {
		$dados = Input::all();
		$image = asset('assets/images/blank.png');

		if (isset($dados['mt_filter'])) {
			$caracteristicas = Caracteristicas::where('descricao', 'LIKE', '%' . $dados['mt_filter'] . '%')
									->selectRaw('descricao AS name, id, "" AS description, "' . $image . '" AS picture_path')
									->get();

			if (count($caracteristicas) === 0) {
				return response()->json(['results' => [], 'status' => 'empty', 'message' => '<a href="' . route("admin.caracteristicas.create", ["type" => "modal"]) . '" class="register-modal" data-toggle="modal" data-target="#register">Cadastre uma nova característica</a>']);
			} else {
				return response()->json(['results' => $caracteristicas, 'status' => 'ok']);
			}
		} else {
			return response()->json(['results' => [], 'status' => 'empty']);
		}
	}

	public function edit($id = null){

		$caracteristica = Caracteristicas::find($id);
	   
		return view('admin.caracteristicas.create',compact('caracteristica'));

	}
	public function destroy($id = null){
		$caracteristicas = Caracteristicas::find($id);
		
		$caracteristicas->delete();
		Ingredientes_caracteristicas::where('caracteristica_id',$id)->delete();

		return Redirect::route('admin.caracteristicas')->with('sucess', 'Registro apagado com sucesso!');;

	}

	public function store($id = null){
		$dados = Input::all();
		if($id){
			$rules = array(
				'descricao'      =>'required|unique:caracteristicas,descricao,'.$id
			);
			$msg = "Registro alterado com sucesso!";
		}else{
		   $rules = array(
				'descricao'      =>'required|unique:caracteristicas,descricao'
			 ); 
		   $msg = "Cadastro efetuado com sucesso!";
		}

		$validator = Validator::make($dados,$rules);

		if(!$validator->fails()){

			if($id){
				$caracteristicas = Caracteristicas::find($id);
			   
			}else{
				$caracteristicas = new Caracteristicas;
			}

			$caracteristicas->descricao               = $dados['descricao'];
			$caracteristicas->save();
			
			if (isset($dados['type']) && $dados['type'] === 'modal') {
				$return = array();
				$return[] = $msg;
				return response()->json(['success' => true, 'message' => $return]);
			} else {
				return Redirect::route('admin.caracteristicas')->with('sucess', $msg);
			}
		} else {
			if (isset($dados['type']) && $dados['type'] === 'modal') {
				return response()->json(['success' => false, 'message' => $validator->errors()->all(), 'fields' => $dados]);
			} else {
				return Redirect::route('admin.caracteristicas.create')
					->withErrors($validator)
					->withInput();
			}
			
		}
	}
   

	
}