<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use DB;
use Auth;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Models\Cardapios;
use Redirect;

class CardapiosController extends Controller {
	private $search;
	private $searchType;
	private $searchStatus;

	public function __construct (Request $request) {
		$this->middleware('auth');

		$this->setSearch($request->input('search'));
		$this->setSearchType($request->input('type'));
		$this->setSearchStatus($request->input('status'));
	}

	public function index() {
		return view('admin.cardapios.list');
	}

	private function setSearch($search) {
		$this->search = $search;
	}

	private function getSearch() {
		return $this->search;
	}

	private function setSearchType($searchType) {
		$this->searchType = $searchType;
	}

	private function getSearchType() {
		return $this->searchType;
	}

	private function setSearchStatus($searchStatus) {
		if ($searchStatus === 'elaborados') {
			$this->searchStatus = 1;
		} else {
			$this->searchStatus = 0;
		}
	}

	private function getSearchStatus() {
		return $this->searchStatus;
	}

	private function searchMenuList () {
		if (!empty($this->getSearch())) {
			$menu = Cardapios::whereHas('cliente', function ($query) {
					$query->where('nome', 'like', '%' . $this->getSearch() . '%');
				})->where('status', $this->getSearchStatus());
		} else {
			$menu = Cardapios::where('status', $this->getSearchStatus());
		}

		$menu = $menu->get();

		return ['list' => $menu, 'total' => count($menu)];
	}

	private function populateRecipesList ($receitas) {
		foreach ($receitas as $key => $receita) {
			if (!isset($menu[$receita->titulo])) $menu[$receita->titulo] = [];
			$menu[$receita->titulo][] = $receita;
		}

		return ['list' => $menu, 'total' => count($receitas)];
	}

	private function searchRecipesList () {
		$menu = [];
		$receitas = DB::table('cardapios')
				->select(['receitas.titulo', 'clientes.nome', 'cardapios.periodo', 'cardapios.created_at', 'cardapios.frequencia', 'cardapios.cardapios', 'receitas.ranking_dibandeja', 'receitas.ranking_clientes'])
				->join('clientes', 'clientes.id', '=', 'cardapios.clientes_id')
				->join('receita_cardapios', 'receita_cardapios.cardapio_id', '=', 'cardapios.id')
				->join('receitas', 'receitas.id', '=', 'receita_cardapios.receita_id')
				->where('receitas.titulo', 'like', '%' . $this->getSearch() . '%')
				->orderBy('receitas.titulo', 'DESC')
				->get();

		return count($receitas) > 0 ? $this->populateRecipesList($receitas) : NULL;
	}

	private function searchAllList () {
		return Cardapios::with(['cliente', 'receitas']);
	}

	public function search (Request $request) {
		$receita = NULL;
		switch ($this->getSearchType()) {
			case 'cardapios':
				$menus = $this->searchMenuList();
				break;
			case 'receitas':
				$menus = $this->searchRecipesList();
				break;
			case 'ingredientes':
				$menus = $this->searchIngredientsList();
				break;
			default:
				$menus = $this->searchAllList();
				break;
		}

		return view('admin.cardapios.list', compact('menus', 'receita'));
	}
}