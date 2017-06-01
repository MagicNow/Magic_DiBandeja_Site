<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use DB;
use URL;
use Auth;
use Session;
use Illuminate\Http\Request;
use App\Models\Ingredientes_historico_revisao;
use App\Models\Fornecedores;
use App\Models\Receitas;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class ApiController extends Controller {
	public function __construct () {

	}

	public function dictionary (Request $request) {
		$url = 'https://languagetool.org/api/v2/check';
		$data = 'text=' . $request->input('text') . '&language=pt-BR&enabledRules=HUNSPELL_RULE&enabledOnly=true';

		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$output = curl_exec ($ch);
		curl_close ($ch);

		$output = json_decode($output);
		if (!empty($output->matches)) {
			$sugestoes = $output->matches[0]->replacements;
			return response()->json(['palavra' => $sugestoes[0]->value]);
		}
	}

	public function ingredientsReview (Request $request) {
		$id = $request->input('id');
		$status = $request->input('status');

		$revisao = Ingredientes_historico_revisao::find($id);
		if (!empty($revisao)) {
			$revisao->status = intval($status);
			$revisao->save();

			$ingrediente = $revisao->ingrediente()->first();
			$ingrediente->historico = $revisao->descricao;
			$ingrediente->save();

			return response()->json(['status' => 'ok']);
		}

		return response()->json(['status' => 'empty']);
	}

	public function getDistributorsNote($fornecedorId = NULL, $id = NULL) {
		$fornecedor = Fornecedores::find($fornecedorId);
		$distribuidor = $fornecedor->distribuidores()->find($id);
		if ($distribuidor) {
			return response()->json(['nota' => $distribuidor->pivot->nota]);
		}
	}

	public function findRecipe(Request $request) {
		$receita = Receitas::find($request->input('id'));

		if (!empty($receita)) {
			return response()->json(['results' => $receita, 'status' => 'ok']);
		} else {
			return response()->json(['results' => [], 'status' => 'empty']);
		}
	}

	public function getSuppliersByGroup (Request $request) {
		parse_str(urldecode($request->input('supliers')), $outputSupliers);
		parse_str(urldecode($request->input('groups')), $outputGroups);

		$image = asset('upload/fornecedores');
		$groups = DB::table('ingredientes_grupos')
					->selectRaw('DISTINCT fornecedores.id, fornecedores.nome AS name, "" AS description, CONCAT("' . $image . '/", fornecedores.imagem) AS picture_path')
					->join('grupos', 'grupos.id', 'ingredientes_grupos.grupo_id')
					->join('fornecedores_ingredientes', 'fornecedores_ingredientes.ingrediente_id', 'ingredientes_grupos.ingrediente_id')
					->join('fornecedores', 'fornecedores.id', 'fornecedores_ingredientes.fornecedor_id')
					->whereIn('grupos.id', $outputGroups);

		if (isset($outputSupliers['fornecedores'])) {
			$groups = $groups->whereNotIn('fornecedores.id', $outputSupliers['fornecedores']);
		}

		$groups = $groups->orderBy('grupos.nome')
					->get();

		if (!empty($groups)) {
			return response()->json(['results' => $groups, 'status' => 'ok']);
		} else {
			return response()->json(['results' => [], 'status' => 'empty']);
		}
	}
}
