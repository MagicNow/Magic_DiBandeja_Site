<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Ingredientes;
use App\Models\Receitas;
use App\Models\Receitas_ingredientes;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class ReceitasController extends Controller {


    public function index() {
        if (Auth::check()) {


           $receitas = Receitas::orderby('id', 'desc')->get();


           return view('admin.receitas.list',compact('receitas'));
        } else {
            return view('auth.login');
        }
    }

    public function create(){

         $ingredientes = Ingredientes::getList();
        return view('admin.receitas.create',compact('ingredientes'));

    }

    public function edit($id = null){

        $receita = Receitas::find($id);
        $ingredientes = Ingredientes::getList();
        $receitas_ingredientes = array();
        foreach ($receita->ingredientes as $key => $value) {
            array_push($receitas_ingredientes,$value->id);
        }
        return view('admin.receitas.create',compact('receita','ingredientes','receitas_ingredientes'));

    }

    public function show($id = null){

        $receita = Receitas::find($id);
        $ingredientes = Ingredientes::getList();
        $receitas_ingredientes = array();
        foreach ($receita->ingredientes as $key => $value) {
            array_push($receitas_ingredientes,$value->id);
        }
        return view('admin.receitas.show',compact('receita','ingredientes','receitas_ingredientes'));

    }

    public function destroy($id = null){
        $receitas = Receitas::find($id);

        $receitas->delete();
        return Redirect::route('admin.receitas')->with('sucess', 'Registro apagado com sucesso!');;

    }

    public function store($id = null){

        $dados = Input::all();
        if($id){
            $rules = array(
                'titulo'        =>'required|unique:receitas,titulo,'.$id,
                'preparo'       =>'required',
                'ingredientes'  =>'required'

            );
            $msg = "Registro alterado com sucesso!";
        }else{
           $rules = array(
                'titulo'      =>'required|unique:receitas,titulo',
                'preparo'       =>'required',
                'ingredientes'  =>'required'
             );
           $msg = "Cadastro efetuado com sucesso!";
        }

        $validator = Validator::make($dados,$rules);

        if(!$validator->fails()){

            if($id){
                $receitas = Receitas::find($id);

            }else{
                $receitas = new Receitas;
            }

            $receitas->titulo                       = $dados['titulo'];
            $receitas->categoria                    = $dados['categoria'];
            $receitas->propriedades_nutricionais    = $dados['propriedades_nutricionais'];
            $receitas->qualificacao                 = $dados['qualificacao'];
            $receitas->beneficios                   = $dados['beneficios'];
            $receitas->preparo                      = $dados['preparo'];
            $receitas->tempo                        = $dados['tempo'];
            $receitas->dificuldade                  = $dados['dificuldade'];
            $receitas->porcoes                      = $dados['porcoes'];
            $receitas->conservacao                  = $dados['conservacao'];
            $receitas->dificuldade                  = $dados['dificuldade'];
            $receitas->calorias                     = $dados['calorias'];
            $receitas->custo                        = $dados['custo'];
            $receitas->fonte                        = $dados['fonte'];
            $receitas->parceiro                     = $dados['parceiro'];
            // $receitas->dificuldade          = $dados['dificuldade'];
            $receitas->sazonalidade_inicial         = date('Y/m/d', strtotime($dados['sazonalidade_inicial']));
            $receitas->sazonalidade_final           = date('Y/m/d', strtotime($dados['sazonalidade_final']));


            // dd($dados);

            $image = Input::file('image');
            if(isset($image)){
                $fileName = md5(str_random(60)).'.'.strtolower($image->getClientOriginalExtension());
                Input::file('image')->move(public_path('upload/receitas'), $fileName);

                $receitas->image = $fileName;
            }

            if ($receitas->save()) {
                Receitas_ingredientes::where('receita_id',$receitas->id)->delete();
                foreach ($dados['ingredientes'] as $ingre) {


                    $ing = new Receitas_ingredientes;
                    $ing->receita_id               = $receitas->id;
                    $ing->ingrediente_id           = $ingre;
                    $ing->save();

                return Redirect::route('admin.receitas')->with('sucess', $msg);
            }
        }

        }else{

            return Redirect::route('admin.receitas.create')
                ->withErrors($validator)
                ->withInput();

        }
    }



}
