<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Ingredientes;
use App\Models\Receitas;
use App\Models\Unidades;
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

        $unidades = Unidades::pluck('unidade','id');

        return view('admin.receitas.create',compact('unidades'));

    }

    public function edit($id = null){

        $receita = Receitas::find($id);
        $ingredientes = Ingredientes::getList();
        $unidades = Unidades::pluck('unidade','id');

        foreach ($receita->ingredientes as $key => $value) {
            $rc = Receitas_ingredientes::find($value->pivot->id);
            $unidade = $rc->unidades()->first();
            $receita->ingredientes[$key]->pivot->medida = $unidade;
        }
        return view('admin.receitas.create',compact('receita','ingredientes','unidades'));

    }

    public function show($id = null){

        $receita = Receitas::find($id);
        $ingredientes = Ingredientes::getList();
        $unidades = Unidades::pluck('unidade','id');

        foreach ($receita->ingredientes as $key => $value) {
            $rc = Receitas_ingredientes::find($value->pivot->id);
            $unidade = $rc->unidades()->first();
            $receita->ingredientes[$key]->pivot->medida = $unidade;
        }
        return view('admin.receitas.show',compact('receita','ingredientes','unidades'));

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

            $receitas->ranking_dibandeja            = $dados['ranking_dibandeja'];
            $receitas->ranking_clientes             = $dados['ranking_clientes'];
            $receitas->ranking_parceiros            = $dados['ranking_parceiros'];

            // $receitas->dificuldade          = $dados['dificuldade'];
            $receitas->sazonalidade_inicial         = date('Y/m/d', strtotime($dados['sazonalidade_inicial']));
            $receitas->sazonalidade_final           = date('Y/m/d', strtotime($dados['sazonalidade_final']));


            $image = Input::file('image');
            if(isset($image)){
                $fileName = md5(str_random(60)).'.'.strtolower($image->getClientOriginalExtension());
                Input::file('image')->move(public_path('upload/receitas'), $fileName);

                $receitas->image = $fileName;
            }

            $quantidade  = isset($dados['ingredientes_quantidade']) ? $dados['ingredientes_quantidade'] : NULL;
            $medida = isset($dados['ingredientes_medida']) ? $dados['ingredientes_medida'] : NULL;

            if ($receitas->save()) {
                Receitas_ingredientes::where('receita_id',$receitas->id)->delete();
                foreach ($dados['ingredientes'] as $key => $ingre) {

                    $ing = new Receitas_ingredientes;
                    $ing->quantidade               = $quantidade[$key];
                    $ing->unidade_id               = $medida[$key];
                    $ing->receita_id               = $receitas->id;
                    $ing->ingrediente_id           = $ingre;
                    $ing->save();

            }
            return Redirect::route('admin.receitas.show', ['id' => $receitas->id])->with('sucess', $msg);
        }

        }else{

            return Redirect::route('admin.receitas.create')
                ->withErrors($validator)
                ->withInput();

        }
    }



}
