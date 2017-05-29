<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Parceiros;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class ParceirosController extends Controller {
    public function __construct () {
        $this->middleware('auth');
    }

    public function index() {
        $parceiros = Parceiros::orderby('id', 'desc')->get();
        return view('admin.parceiros.list',compact('parceiros'));
    }

    public function create(){
        return view('admin.parceiros.create');
    }

    public function store($id = null){

        $dados = Input::all();

        if($id){
			$rules = array(
				'nome' =>'required|unique:parceiros,nome,'.$id

			);
			$msg = "Registro alterado com sucesso!";
		}else{
		   $rules = array(
				'nome' =>'required|unique:parceiros,nome'
			 );
		   $msg = "Cadastro efetuado com sucesso!";
		}

        $validator = Validator::make($dados,$rules);

        if(!$validator->fails()){

            if($id){
                $parceiros = Parceiros::find($id);

            }else{
                $parceiros = new Parceiros;
            }

            $parceiros->nome = $dados['nome'];            
            $parceitos->apelido = $dados['apelido'];
            $parceitos->profissao = $dados['profissao'];
            $parceitos->url = $dados['url'];
            $parceitos->email = $dados['email'];
            $parceitos->telefone = $dados['telefone'];
            $parceitos->endereco = $dados['endereco'];
            $parceitos->bairro = $dados['bairro'];
            $parceitos->cidade = $dados['cidade'];
            $parceitos->cep = $dados['cep'];
            $parceitos->estado = $dados['estado'];
            $parceitos->pais = $dados['pais'];
            $parceitos->numero = $dados['numero'];
            $parceitos->complemento = $dados['complemento'];

            $image = Input::file('image');
            if(isset($image)){
                $fileName = md5(str_random(60)).'.'.strtolower($image->getClientOriginalExtension());
                Input::file('image')->move(public_path('upload/parceiros'), $fileName);

                $parceiros->image = $fileName;
            }



            if ($parceiros->save()) {

                if (isset($dados['type']) && $dados['type'] === 'modal') {
                    $return = array();
                    $return[] = $msg;
                    return response()->json(['success' => true, 'message' => $return]);
                } else {
                    return Redirect::route('admin.parceiros')->with('sucess', $msg);
                }
            }
        } else {
            if (isset($dados['type']) && $dados['type'] === 'modal') {
                return response()->json(['success' => false, 'message' => $validator->errors()->all(), 'fields' => $dados]);
            } else {
                return Redirect::route('admin.parceiros.create')
                    ->withErrors($validator)
                    ->withInput();
            }
        }
    }


}
