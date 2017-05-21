<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Clientes;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class ClientesController extends Controller {


    public function index() {
        if (Auth::check()) {
           $clientes = Clientes::orderby('id', 'desc')->get();
           return view('admin.clientes.list',compact('clientes'));
        } else {
            return view('auth.login');
        }
    }

    public function create(){

        return view('admin.clientes.create');

    }

    public function edit($id = null){

        $cliente = Clientes::find($id);
        return view('admin.clientes.create',compact('cliente'));

    }

    public function show($id = null){

    }

    public function destroy($id = null){
        $clientes = Clientes::find($id);

        $clientes->delete();
        return Redirect::route('admin.clientes')->with('sucess', 'Registro apagado com sucesso!');;

    }

    public function store($id = null){

        $dados = Input::all();

        if($id){
			$rules = array(
				'nome' =>'required|unique:clientes,nome'

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
				$clientes = Clientes::find($id);
			} else {
				$clientes = new Clientes;
			}

			$clientes->nome = $dados['nome'];
			$clientes->save();

			if (isset($dados['type']) && $dados['type'] === 'modal') {
				$return = array();
				$return[] = $msg;
				return response()->json(['success' => true, 'message' => $return]);
			} else {
				return Redirect::route('admin.clientes')->with('sucess', $msg);
			}
		} else {
			if (isset($dados['type']) && $dados['type'] === 'modal') {
				return response()->json(['success' => false, 'message' => $validator->errors()->all(), 'fields' => $dados]);
			} else {
				return Redirect::route('admin.clientes.create')
					->withErrors($validator)
					->withInput();
			}
		}
    }



}
