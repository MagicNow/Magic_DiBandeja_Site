<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Models\Cardapios;
use Redirect;

class CardapiosController extends Controller {
	public function __construct () {
		$this->middleware('auth');
	}

	public function index() {
		return view('admin.cardapios.list');
	}

	public function search () {
		$menus = Cardapios::with(['cliente', 'receitas'])->get();
		return view('admin.cardapios.list', compact('menus'));
	}
}