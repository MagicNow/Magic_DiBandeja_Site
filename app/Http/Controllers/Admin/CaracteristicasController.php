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
                'descricao'      =>'required|unique:caracteristicas,descricao'
            );
            $msg = "Registro alterado com sucesso!";
        }else{
           $rules = array(
                'descricao'      =>'required|unique:caracteristicas,descricao,'.$id
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
            
         
            return Redirect::route('admin.caracteristicas')->with('sucess', $msg);
        }else{

            return Redirect::route('admin.caracteristicas.create')
                ->withErrors($validator)
                ->withInput();
            
        }
    }
   

    
}