<?php

namespace App\Http\Controllers;
use App\Models\FornecedoresSite;
use App\Models\ClientesSite;
use App\Models\Parceiros;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
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
    public function participe()
    {
        return view('site.participe',compact(''));
    }
    public function contato()
    {
        return view('site.contato',compact(''));
    }
    

    public function clientePF()
    {

        return view('site.clientepf',compact(''));
    }

    public function clientePJ()
    {

        return view('site.clientepj',compact(''));
    }

    public function fornecedor()
    {

        return view('site.fornecedor',compact(''));
    }

    public function parceiro()
    {

        return view('site.parceiro',compact(''));
    }



    public function storeContato()
    {
        return view('site.contato',compact(''));
    }
    

    public function storeClientePF()
    {
        $dados = Input::all();
        $validator = Validator::make($dados, [
            'nome'         => 'required',
            'email'         => 'required',
            
        ]);

        if ($validator->fails()) {
            return Redirect::route('cliente.pf')->withErrors($validator)->withInput();
        }

        

        try {
            $dados['pessoa'] = 'Física';

            
            $aa = ClientesSite::create($dados);

            return Redirect::route('cliente.pf')->with('sucess', 'É uma prazer tê-lo cadastrado no DiBandeja. Sinta-se na sua cozinha.');                  
        } catch (\Exception $ex) {
            return Redirect::route('cliente.pf')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function storeClientePJ()
    {

        $dados = Input::all();
        $validator = Validator::make($dados, [
            'razao_social'      => 'required',
            'email'             => 'required',
            'cep'               => 'required',
            'endereco'          => 'required',
            'bairro'            => 'required',
            'cidade'            => 'required',
            'estado'            => 'required',
            'telefone'          => 'required',
            
            
        ]);

        if ($validator->fails()) {
            return Redirect::route('cliente.pj')->withErrors($validator)->withInput();
        }

        

        try {
            $dados['pessoa'] = 'Juridica';
            ClientesSite::create($dados);
            return Redirect::route('cliente.pj')->with('sucess', 'Obrigada pelo cadastramento. O nosso negócio é ajudar o seu.');                  
        } catch (\Exception $ex) {
            return Redirect::route('cliente.pj')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function storeFornecedor()
    {

        $dados = Input::all();
        $validator = Validator::make($dados, [
            'razao_social'      => 'required',
            'nome_fantasia'     => 'required',
            'especialidade'     => 'required',
            'cep'               => 'required',
            'endereco'          => 'required',
            'bairro'            => 'required',
            'cidade'            => 'required',
            'estado'            => 'required',
            'telefone'          => 'required',
            
            
        ]);

        if ($validator->fails()) {
            return Redirect::route('fornecedor')->withErrors($validator)->withInput();
        }

        

        try {
            FornecedoresSite::create($dados);
            return Redirect::route('fornecedor')->with('sucess', 'Registro efetuado com sucesso!');                  
        } catch (\Exception $ex) {
            return Redirect::route('fornecedor')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function storeParceiro()
    {

        $dados = Input::all();
        $validator = Validator::make($dados, [
            'nome'          => 'required',
            'apelido'       => 'required',
            'profissao'     => 'required',
            'email'         => 'required',
            'cep'           => 'required',
            'endereco'      => 'required',
            'bairro'        => 'required',
            'cidade'        => 'required',
            'estado'        => 'required',
            'telefone'      => 'required',
            
            
        ]);

        if ($validator->fails()) {
            return Redirect::route('parceiro')->withErrors($validator)->withInput();
        }

        

        try {
            Parceiros::create($dados);
            return Redirect::route('parceiro')->with('sucess', 'É uma prazer tê-lo ao nosso lado no DiBandeja. Também estamos ao seu lado.');                  
        } catch (\Exception $ex) {
            return Redirect::route('parceiro')
                ->withErrors($validator)
                ->withInput();
        }
    }
}
