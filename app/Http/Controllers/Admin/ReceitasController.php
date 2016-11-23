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
            
            
            $receitas->titulo               = $dados['titulo'];
            $receitas->subtitulo            = $dados['subtitulo'];
            $receitas->preparo              = $dados['preparo'];
            $receitas->observacoes         = $dados['observacoes'];
            $receitas->save();

            Receitas_ingredientes::where('receita_id',$receitas->id)->delete();
            foreach ($dados['ingredientes'] as $ingre) {


                $ing = new Receitas_ingredientes;
                $ing->receita_id               = $receitas->id;
                $ing->ingrediente_id           = $ingre;
                $ing->save();

            }
            
            
         
            return Redirect::route('admin.receitas')->with('sucess', $msg);
        }else{

            return Redirect::route('admin.receitas.create')
                ->withErrors($validator)
                ->withInput();
            
        }
    }
   

    
}