<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Fontes;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class FontesController extends Controller {
	public function index() {
		if (Auth::check()) { 
		   $fontes = Fontes::orderby('id', 'nome')->get();

		   return view('admin.fontes.list', compact('fontes'));
		} else {
			return view('auth.login');
		}
	}

	public function create(){
		return view('admin.fontes.create');
	}

	public function edit($id = null){
		$fonte = Fontes::find($id);
	   
		return view('admin.fontes.create',compact('fonte'));
	}

	public function destroy($id = null){
		$fontes = Fontes::find($id);
		
		$fontes->delete();
		return Redirect::route('admin.fontes')->with('sucess', 'Registro apagado com sucesso!');;
	}

	public function store($id = null){
		$dados = Input::all();

		if($id){
			$rules = array(
				'nome' =>'required|unique:fontes,nome,' . $id

			);
			$msg = "Registro alterado com sucesso!";
		} else {
		   $rules = array(
				'nome'      =>'required|unique:fontes,nome'
			 ); 
		   $msg = "Cadastro efetuado com sucesso!";
		}

		$validator = Validator::make($dados,$rules);

		if(!$validator->fails()){

			if($id){
				$fontes = Fontes::find($id);
			} else {
				$fontes = new Fontes;
			}

			$fontes->nome = $dados['nome'];          
			$fontes->save();

			return Redirect::route('admin.fontes')->with('sucess', $msg);
		} else {
			return Redirect::route('admin.fontes.edit')
				->withErrors($validator)
				->withInput();
		}
	}
}