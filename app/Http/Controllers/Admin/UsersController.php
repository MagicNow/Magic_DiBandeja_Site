<?php

namespace App\Http\Controllers\Admin;

use URL;
use Auth;
use Session;
use Request;

class UsersController extends Controller {
	public function users() {
		if (Auth::check()) { 
		   return view('auth.login');
		} else {
			return view('auth.login');
		}
	}
}