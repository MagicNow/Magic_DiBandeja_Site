<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use URL;
use Auth;
use Session;
use Request;
class AdminController extends Controller {


   

    public function index() {
        if (Auth::check()) {
            return redirect ('/admin/ingredientes');
        } else {
        	return view('auth.login');
        }
    }

    public function login() {
        if (Auth::attempt(['email' => request::input('username'), 'password' => request::input('password')])) {
            return redirect ('/admin/ingredientes');
        } else {
            
            return view('auth.login');
        }
    }
    public function logout() {
        
        Auth::logout();
        
        return redirect('/admin');
    }

}