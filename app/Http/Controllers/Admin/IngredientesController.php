<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
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
    public function __construct () {
        $this->middleware('auth');
    }

    public function index() {
        $ingredientes = Ingredientes::orderby('id', 'desc')->get();
        return view('admin.ingredientes.list', compact('ingredientes'));
    }

    public function listItems() {
        $dados = Input::all();
        $image = asset('upload/ingredientes');

        if (isset($dados['mt_filter'])) {
            $ingredientes = Ingredientes::where('nome', 'LIKE', '%' . $dados['mt_filter'] . '%')
                                    ->selectRaw('nome AS name, id, "" AS description, CONCAT("' . $image . '/", image) AS picture_path')
                                    ->get();

            foreach ($ingredientes as $key => $ingrediente) {
                if (empty($ingrediente->picture_path)) {
                    $ingrediente->picture_path = asset('assets/images/blank.png');
                }
            }

            if (count($ingredientes) === 0) {
                return response()->json(['results' => [], 'status' => 'empty', 'message' => '<a href="' . route("admin.ingredientes.create", ["type" => "modal"]) . '" class="register-modal" data-toggle="modal" data-target="#register">Cadastre um novo ingrediente</a>']);
            } else {
                return response()->json(['results' => $ingredientes, 'status' => 'ok']);
            }
        } else {
            return response()->json(['results' => [], 'status' => 'empty']);
        }
    }

    public function create(){
        $ingrediente = new Ingredientes();
        $ingredientes_relacionados = array();
        $ingrediente_afinidade = Ingredientes::pluck('nome','id');

        return view('admin.ingredientes.create',compact('ingrediente_afinidade', 'ingrediente', 'ingredientes_relacionados'));
    }

    public function edit($id = null){
        if (!Auth::check()) { return view('auth.login'); return false; }

        $id = intval($id);
        $ingrediente = Ingredientes::where('id', $id)
                            ->with(['revisoes' => function ($query) {
                                $query->whereNull('status');
                            }, 'revisoes.cliente_site'])->first();

        $ingrediente_afinidade = Ingredientes::where('id','<>',$id)->pluck('nome','id');

        $caracteristicas_ingredientes = array();

        foreach ($ingrediente->caracteristicas as $key => $value) {
            $caracteristicas_ingredientes[$value->id] = $value->descricao;
        }
        $caracteristicas_ingredientes = json_encode($caracteristicas_ingredientes, JSON_UNESCAPED_UNICODE);

        $grupos_ingredientes = array();
        foreach ($ingrediente->grupos as $key => $value) {
            $grupos_ingredientes[$value->id] = $value->nome;
        }
        $grupos_ingredientes = json_encode($grupos_ingredientes, JSON_UNESCAPED_UNICODE);

        $ingredientes_relacionados = array();
        foreach ($ingrediente->relacionados as $key => $value) {
            array_push($ingredientes_relacionados, $value->id);
        }

        $fornecedores_ingredientes = $ingrediente->fornecedores;

        return view('admin.ingredientes.create',compact('ingrediente_afinidade', 'ingrediente', 'caracteristicas_ingredientes', 'grupos_ingredientes', 'ingredientes_relacionados', 'fornecedores_ingredientes'));
    }

    public function show($id = null){
        if (!Auth::check()) { return view('auth.login'); return false; }

        $id = intval($id);
        $ingrediente = Ingredientes::where('id', $id)
                            ->with(['revisoes' => function ($query) {
                                $query->whereNull('status');
                            }, 'revisoes.cliente_site'])->first();

        return view('admin.ingredientes.show',compact('ingrediente'));

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
                'nome'      =>'required|unique:ingredientes,nome,'.$id
            );
            $msg = "Registro alterado com sucesso!";
        }else{
           $rules = array(
                'nome'      =>'required|unique:ingredientes,nome,'.$id
             );
           $msg = "Cadastro efetuado com sucesso!";
        }

        $validator = Validator::make($dados,$rules);

        if(!$validator->fails()){
            if($id){
                $ingrediente = Ingredientes::find($id);
            } else {
                $ingrediente = new Ingredientes;
            }

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

            $ingrediente->nome                      = $dados['nome'];
            $ingrediente->nome_cientifico           = $dados['nome_cientifico'];
            $ingrediente->propriedades_nutricionais = $dados['propriedades_nutricionais'];
            $ingrediente->qualificacoes             = $dados['qualificacoes'];
            $ingrediente->beneficios                = $dados['beneficios'];
            $ingrediente->restricoes                = $dados['restricoes'];
            $ingrediente->sazonalidade_inicial      = $sazonalidade_inicial;
            $ingrediente->sazonalidade_final        = $sazonalidade_final;
            $ingrediente->historico                 = $dados['historico'];

            $image = Input::file('image');
            if(isset($image)){
                $fileName = md5(str_random(60)).'.'.strtolower($image->getClientOriginalExtension());
                Input::file('image')->move(public_path('upload/ingredientes'), $fileName);

                $ingrediente->image = $fileName;
            }

            if ($ingrediente->save()) {
                Ingredientes_caracteristicas::where('ingrediente_id',$ingrediente->id)->delete();
                if(isset($dados['caracteristicas'])){
                    foreach ($dados['caracteristicas'] as $carac) {
                        $ing = new Ingredientes_caracteristicas;
                        $ing->ingrediente_id         = $ingrediente->id;
                        $ing->caracteristica_id      = (int) $carac;
                        $ing->save();
                    }
                }

                Ingredientes_grupos::where('ingrediente_id',$ingrediente->id)->delete();
                if(isset($dados['grupos'])){
                    foreach ($dados['grupos'] as $key => $group) {
                        $grupo = new Ingredientes_grupos;
                        $grupo->ingrediente_id          = $ingrediente->id;
                        $grupo->grupo_id                = (int) $group;
                        $grupo->save();
                    }
                }

                Fornecedores_ingredientes::where('ingrediente_id', $ingrediente->id)->delete();

                $custo  = isset($dados['fornecedores_custo']) ? $dados['fornecedores_custo'] : NULL;
                $medida = isset($dados['fornecedores_medida']) ? $dados['fornecedores_medida'] : NULL;

                if(isset($dados['fornecedores'])){
                    foreach ($dados['fornecedores'] as $key => $forne) {
                        $frn = new Fornecedores_ingredientes;
                        $frn->ingrediente_id    = $ingrediente->id;
                        $frn->fornecedor_id     = $forne;
                        $frn->custo             = $custo[$key];
                        $frn->medida            = $medida[$key];
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

                return Redirect::route('admin.ingredientes.show', ['id' => $ingrediente->id])->with('sucess', $msg);
            }
        }else{
            return Redirect::route('admin.ingredientes.create')
                ->withErrors($validator)
                ->withInput();
        }
    }
}
