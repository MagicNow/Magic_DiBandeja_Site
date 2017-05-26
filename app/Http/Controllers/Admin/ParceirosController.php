<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use URL;
use Auth;
use Session;
use Request;
use App\Models\Parceiros;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

class ParceirosController extends Controller {
    public function __construct () {
        $this->middleware('auth');
    }

    public function index() {
        $parceiros = Parceiros::orderby('id', 'desc')->get();
        return view('admin.parceiros.list',compact('parceiros'));
    }

}
