<?php

namespace App\Http\Controllers\Admin;

use URL;
use Auth;
use Session;
use Request;

class UsersController extends Controller {
	public function __construct () {
		$this->middleware('auth');
	}

	public function users() {
		return view('auth.login');
	}
}