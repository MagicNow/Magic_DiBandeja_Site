<?php

namespace App\Http\Controllers;

use Auth;


class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {

        return view('site.home',compact(''));
    }

    public function dibandeja_para_voce()
    {
        return view('site.dibandeja-pra-voce',compact(''));
    }

    public function sobre()
    {
        return view('site.sobre',compact(''));
    }

    public function contato()
    {
        return view('site.contato',compact(''));
    }
    
}
