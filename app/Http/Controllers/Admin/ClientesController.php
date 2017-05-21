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
        $tipo = [
			'0' => 'checked',
			'1' => ''
		];
        return view('admin.clientes.create', compact('tipo'));

    }

    public function edit($id = null){

        $cliente = Clientes::find($id);

        $tipo = [
            '0' => $cliente->tipo === 0 ? 'checked' : '',
            '1' => $cliente->tipo === 1 ? 'checked' : ''
        ];

        return view('admin.clientes.create',compact('cliente','tipo'));

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
				'nome'      =>'required|unique:clientes,nome,'.$id
			);
			$msg = "Registro alterado com sucesso!";
		}else{
		   $rules = array(
				'nome'      =>'required|unique:clientes,nome'
			 );
		   $msg = "Cadastro efetuado com sucesso!";
		}

        // dd($dados);

		$validator = Validator::make($dados,$rules);

        if(!$validator->fails()){

            $image = Input::file('image');
            if(isset($image)){
                $fileName = md5(str_random(60)).'.'.strtolower($image->getClientOriginalExtension());
                Input::file('image')->move(public_path('upload/clientes'), $fileName);

                $dados['image'] = $fileName;
            }

			if($id){
				$clientes = Clientes::find($id);
                $clientes->update($dados);
			} else {
				$clientes = new Clientes;
                $clientes->create($dados);
			}

			return Redirect::route('admin.clientes')->with('sucess', $msg);

		} else {
    		return Redirect::route('admin.clientes.create')
    			->withErrors($validator)
    			->withInput();
		}
    }



}
