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
use App\Models\Categorias;
use App\Models\Parceiros;
use App\Models\Receitas_categorias;
use App\Models\Receitas_ingredientes;
use App\Models\Receitas_parceiros;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class ReceitasController extends Controller {
    public function __construct () {
        $this->middleware('auth');
    }

    public function index() {
        $receitas = Receitas::orderby('id', 'desc')->get();

        return view('admin.receitas.list',compact('receitas'));
    }

    public function listItems() {
        $dados = Input::all();
        $image = asset('assets/images/blank.png');

        if (isset($dados['mt_filter'])) {
            $grupos = Receitas::where('titulo', 'LIKE', '%' . $dados['mt_filter'] . '%')
                                    ->selectRaw('titulo AS name, id, "" AS description, "' . $image . '" AS picture_path')
                                    ->get();

            if (count($grupos) === 0) {
                return response()->json(['results' => [], 'status' => 'empty', 'message' => 'Nenhuma receita encontrada']);
            } else {
                return response()->json(['results' => $grupos, 'status' => 'ok']);
            }
        } else {
            return response()->json(['results' => [], 'status' => 'empty']);
        }
    }

    public function listCategories() {
        $dados = Input::all();
        $image = asset('upload/categorias');

        if (isset($dados['mt_filter'])) {
            $categorias = Categorias::where('nome', 'LIKE', '%' . $dados['mt_filter'] . '%')
                                    ->selectRaw('nome AS name, id, "" AS description, CONCAT("' . $image . '/", image) AS picture_path')
                                    ->get();

            foreach ($categorias as $key => $categoria) {
                if (empty($categoria->picture_path)) {
                    $categoria->picture_path = asset('assets/images/blank.png');
                }
            }

            if (count($categorias) === 0) {
                return response()->json(['results' => [], 'status' => 'empty', 'message' => '<a href="' . route("admin.categorias.create", ["type" => "modal"]) . '" class="register-modal" data-toggle="modal" data-target="#register">Cadastre uma nova categoria</a>']);
            } else {
                return response()->json(['results' => $categorias, 'status' => 'ok']);
            }
        } else {
            return response()->json(['results' => [], 'status' => 'empty']);
        }
    }

    public function listParceiros() {
        $dados = Input::all();

        $image = asset('upload/parceiros');

        if (isset($dados['mt_filter'])) {
            $parceiros = Parceiros::where('nome', 'LIKE', '%' . $dados['mt_filter'] . '%')
                                    ->selectRaw('nome AS name, id, "" AS description, CONCAT("' . $image . '/", image) AS picture_path')
                                    ->get();

            foreach ($parceiros as $key => $parceiro) {
                if (empty($parceiro->picture_path)) {
                    $parceiro->picture_path = asset('assets/images/blank.png');
                }
            }

            if (count($parceiros) === 0) {
                return response()->json(['results' => [], 'status' => 'empty', 'message' => '<a href="' . route("admin.parceiros.create", ["type" => "modal"]) . '" class="register-modal" data-toggle="modal" data-target="#register">Cadastre um novo parceiro</a>']);
            } else {
                return response()->json(['results' => $parceiros, 'status' => 'ok']);
            }
        } else {
            return response()->json(['results' => [], 'status' => 'empty']);
        }
    }

    public function create(){

        $unidades = Unidades::pluck('unidade','id')->prepend('Selecione','');

        return view('admin.receitas.create',compact('unidades'));

    }

    public function edit($id = null){

        $receita = Receitas::find($id);
        $ingredientes = Ingredientes::getList();
        $unidades = Unidades::pluck('unidade','id')->prepend('Selecione','');

        foreach ($receita->ingredientes as $key => $value) {
            $rc = Receitas_ingredientes::find($value->pivot->id);
            $unidade = $rc->unidades()->first();
            $receita->ingredientes[$key]->pivot->medida = $unidade;
        }

        $categorias = array();
        foreach ($receita->categorias as $key => $value) {
            $categorias[$value->id] = $value->nome;
        }
        $categorias = json_encode($categorias, JSON_UNESCAPED_UNICODE);

        return view('admin.receitas.create',compact('receita', 'ingredientes', 'unidades', 'categorias'));

    }

    public function show($id = null){

        $receita = Receitas::find($id);
        $ingredientes = Ingredientes::getList();
        $unidades = Unidades::pluck('unidade','id')->prepend('Selecione','');

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
                // 'preparo'       =>'required',
                'calorias'      =>'required|integer',
                'ingredientes'  =>'required',
                'custo'         =>'required|regex:/^\d*(\.\d{1,2})?$/'

            );
            $msg = "Registro alterado com sucesso!";
        }else{
           $rules = array(
                'titulo'      =>'required|unique:receitas,titulo',
                // 'preparo'       =>'required',
                'calorias'      =>'required|integer',
                'ingredientes'  =>'required',
                'custo'         =>'required|regex:/^\d*(\.\d{1,2})?$/'
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
            $receitas->fontes_id                    = $dados['fontes_id'][0];
            $receitas->parceiro                     = $dados['parceiro'];

            $receitas->ranking_dibandeja            = $dados['ranking_dibandeja'];
            $receitas->ranking_clientes             = $dados['ranking_clientes'];
            $receitas->ranking_parceiros            = $dados['ranking_parceiros'];

            // $receitas->dificuldade          = $dados['dificuldade'];
            // $receitas->sazonalidade_inicial         = date('Y/m/d', strtotime($dados['sazonalidade_inicial']));
            // $receitas->sazonalidade_final           = date('Y/m/d', strtotime($dados['sazonalidade_final']));
            if (isset($dados['sazonalidade_inicial']) && !empty($dados['sazonalidade_inicial'])) {
                $sazonalidade_inicial = explode('/', $dados['sazonalidade_inicial']);
                if (count($sazonalidade_inicial) === 3) {
                    $sazonalidade_inicial = $sazonalidade_inicial[2] . '-' . $sazonalidade_inicial[1]. '-' . $sazonalidade_inicial[0];
                }
            } else {
                $sazonalidade_inicial = NULL;
            }

            if (isset($dados['sazonalidade_final']) && !empty($dados['sazonalidade_final'])) {
                $sazonalidade_final = explode('/', $dados['sazonalidade_final']);
                if (count($sazonalidade_final) === 3) {
                    $sazonalidade_final = $sazonalidade_final[2] . '-' . $sazonalidade_final[1]. '-' . $sazonalidade_final[0];
                }
            } else {
                $sazonalidade_final = NULL;
            }

            $receitas->sazonalidade_inicial = $sazonalidade_inicial;
            $receitas->sazonalidade_final   = $sazonalidade_final;


            $image = Input::file('image');
            if(isset($image)){
                $fileName = md5(str_random(60)).'.'.strtolower($image->getClientOriginalExtension());
                Input::file('image')->move(public_path('upload/receitas'), $fileName);

                $receitas->image = $fileName;
            }

            $quantidade  = isset($dados['ingredientes_quantidade']) ? $dados['ingredientes_quantidade'] : NULL;
            $medida = isset($dados['ingredientes_medida']) ? $dados['ingredientes_medida'] : NULL;

            if ($receitas->save()) {
                Receitas_categorias::where('receitas_id', $receitas->id)->delete();
                if(isset($dados['categorias'])){
                    foreach ($dados['categorias'] as $categ) {
                        $ing = new Receitas_categorias;
                        $ing->receitas_id   = (int)$receitas->id;
                        $ing->categorias_id = (int)$categ;
                        $ing->save();
                    }
                }

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

            // return Redirect::route('admin.receitas.create')
            return back()
                ->withErrors($validator)
                ->withInput();

        }
    }



}
