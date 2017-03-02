<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Ingredientes;
use App\Models\Caracteristicas;
use App\Models\Grupos;
use App\Models\Fornecedores;
use App\Models\Ingredientes_caracteristicas;
use App\Models\Ingredientes_grupos;
use App\Models\Fornecedores_ingredientes;
use App\Models\Ingredientes_relacionados;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class IngredientesController extends Controller {


    public function index() {
        if (Auth::check()) {
           $ingredientes = Ingredientes::orderby('id', 'desc')->get();

           return view('admin.ingredientes.list',compact('ingredientes'));
        } else {
            return view('auth.login');
        }
    }

    public function create(){

        $caracteristicas = Caracteristicas::lists('descricao','id');
        $grupos = Grupos::lists('descricao','id');
        $fornecedores = Fornecedores::lists('razao_social','id');
        $ingredientes = Ingredientes::lists('ingrediente','id');

        return view('admin.ingredientes.create',compact('caracteristicas','grupos','fornecedores','ingredientes'));

    }

    public function edit($id = null){

        $ingrediente = Ingredientes::find($id);
        $caracteristicas = Caracteristicas::lists('descricao','id');
        $grupos = Grupos::lists('descricao','id');
        $fornecedores = Fornecedores::lists('razao_social','id');
        $ingredientes = Ingredientes::where('id','<>',$id)->lists('ingrediente','id');


        $caracteristicas_ingredientes = array();
        foreach ($ingrediente->caracteristicas as $key => $value) {
            array_push($caracteristicas_ingredientes,$value->id);
        }

        $grupos_ingredientes = array();
        foreach ($ingrediente->grupos as $key => $value) {
            array_push($grupos_ingredientes,$value->id);
        }

        $ingredientes_relacionados = array();
        foreach ($ingrediente->relacionados as $key => $value) {
            array_push($ingredientes_relacionados,$value->id);
        }

        $fornecedores_ingredientes = array();
        foreach ($ingrediente->fornecedores as $key => $value) {
            array_push($fornecedores_ingredientes,$value->id);
        }


        return view('admin.ingredientes.create',compact('ingrediente','caracteristicas','grupos','fornecedores','ingredientes','caracteristicas_ingredientes','grupos_ingredientes','ingredientes_relacionados','fornecedores_ingredientes'));

    }
    public function destroy($id = null){

        Ingredientes_grupos::where('ingrediente_id',$id)->delete();
        Ingredientes_caracteristicas::where('ingrediente_id',$id)->delete();
        Fornecedores_ingredientes::where('ingrediente_id',$id)->delete();
        Ingredientes_relacionados::where('ingrediente_id_to',$id)->delete();
        Ingredientes_relacionados::where('ingrediente_id_from',$id)->delete();

        $ingredientes = Ingredientes::find($id);        
        $ingredientes->delete();
        return Redirect::route('admin.ingredientes')->with('sucess', 'Registro apagado com sucesso!');;

    }

    public function store($id = null){
        
        $dados = Input::all();
        if($id){
            $rules = array(
                'ingrediente'      =>'required|unique:ingredientes,ingrediente,'.$id

            );
            $msg = "Registro alterado com sucesso!";
        }else{
           $rules = array(
                'ingrediente'      =>'required|unique:ingredientes,ingrediente,'.$id
             ); 
           $msg = "Cadastro efetuado com sucesso!";
        }

        $validator = Validator::make($dados,$rules);

        if(!$validator->fails()){

            if($id){
                $ingrediente = Ingredientes::find($id);
               
            }else{
                $ingrediente = new Ingredientes;
            }
            
            
            $ingrediente->ingrediente               = $dados['ingrediente'];
            $ingrediente->nome_cientifico           = $dados['nome_cientifico'];
            $ingrediente->propriedades_nutricionais = $dados['propriedades_nutricionais'];
            $ingrediente->qualificacoes             = $dados['qualificacoes'];
            $ingrediente->beneficios                = $dados['beneficios'];
            $ingrediente->restricoes                = $dados['restricoes'];
            $ingrediente->sazonalidade_inicial      = date('Y/m/d H:i:s',strtotime($dados['sazonalidade_inicial']));
            $ingrediente->sazonalidade_final        = date('Y/m/d H:i:s',strtotime($dados['sazonalidade_final']));
            $ingrediente->historico                 = $dados['historico'];
            $ingrediente->custo                     = $dados['custo'];
            $ingrediente->medida                    = $dados['medida'];

            $image = Input::file('image');
            if(isset($image)){
                $fileName = md5(str_random(60)).'.'.strtolower($image->getClientOriginalExtension());
                Input::file('image')->move(public_path('upload/ingredientes'), $fileName);
                
                $ingrediente->image                = $fileName; 
            }

            $ingrediente->save();
            
            Ingredientes_caracteristicas::where('ingrediente_id',$ingrediente->id)->delete();
            if(isset($dados['caracteristicas'])){
                foreach ($dados['caracteristicas'] as $carac) {
                    $ing = new Ingredientes_caracteristicas;
                    $ing->ingrediente_id         = $ingrediente->id;
                    $ing->caracteristica_id      = $carac;
                    $ing->save();
                }
            }

            Ingredientes_grupos::where('ingrediente_id',$ingrediente->id)->delete();
            if(isset($dados['grupos'])){

                foreach ($dados['grupos'] as $grup) {
                    $grupo = new Ingredientes_grupos;
                    $grupo->ingrediente_id          = $ingrediente->id;
                    $grupo->grupo_id                = $grup;
                    $grupo->save();
                }
            }

            Fornecedores_ingredientes::where('ingrediente_id',$ingrediente->id)->delete();
            if(isset($dados['fornecedores'])){

                foreach ($dados['fornecedores'] as $forne) {
                    $frn = new Fornecedores_ingredientes;
                    $frn->ingrediente_id    = $ingrediente->id;
                    $frn->fornecedor_id     = $forne;
                    $frn->save();
                }
            }

            Ingredientes_relacionados::where('ingrediente_id_to',$ingrediente->id)->delete();
            if(isset($dados['ingredientes_relacionados'])){
                foreach ($dados['ingredientes_relacionados'] as $ingre) {
                    $rel = new Ingredientes_relacionados;
                    $rel->ingrediente_id_to         = $ingrediente->id;
                    $rel->ingrediente_id_from       = $ingre;
                    $rel->save();
                }   
            }
            
            return Redirect::route('admin.ingredientes')->with('sucess', $msg);
        }else{

            return Redirect::route('admin.ingredientes.create')
                ->withErrors($validator)
                ->withInput();
            
        }
    }
   

    
}