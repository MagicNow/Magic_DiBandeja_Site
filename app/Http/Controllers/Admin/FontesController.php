<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Receitas;
use App\Models\Fontes;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class FontesController extends Controller {
	public function __construct () {
		$this->middleware('auth');
	}

 	public function index() {
		$receitas = Receitas::orderby('id', 'nome')->with('fontes')->get();

		return view('admin.fontes.list', compact('receitas'));
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
			$fontes->descricao = $dados['descricao'];
			$fontes->save();

			if (isset($dados['type']) && $dados['type'] === 'modal') {
				$return = array();
				$return[] = $msg;
				return response()->json(['success' => true, 'message' => $return]);
			} else {
				return Redirect::route('admin.fontes')->with('sucess', $msg);
			}
		} else {
			if (isset($dados['type']) && $dados['type'] === 'modal') {
				return response()->json(['success' => false, 'message' => $validator->errors()->all(), 'fields' => $dados]);
			} else {
				return Redirect::route('admin.fontes.create')
					->withErrors($validator)
					->withInput();
			}
		}
	}

    public function listItems() {
        $dados = Input::all();

        if (isset($dados['mt_filter'])) {
            $fontes = Fontes::where('nome', 'LIKE', '%' . $dados['mt_filter'] . '%')
                                    ->selectRaw('nome AS name, id, "" AS description')
                                    ->get();

            foreach ($fontes as $key => $ingrediente) {
                if (empty($ingrediente->picture_path)) {
                    $ingrediente->picture_path = asset('assets/images/blank.png');
                }
            }

            if (count($fontes) === 0) {
                return response()->json(['results' => [], 'status' => 'empty', 'message' => '<a href="' . route("admin.fontes.create", ["type" => "modal"]) . '" class="register-modal" data-toggle="modal" data-target="#register">Cadastre uma nova fonte.</a>']);
            } else {
                return response()->json(['results' => $fontes, 'status' => 'ok']);
            }
        } else {
            return response()->json(['results' => [], 'status' => 'empty']);
        }
    }

}
