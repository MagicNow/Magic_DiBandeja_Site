<?php

namespace App\Http\Controllers;
use App\Models\FornecedoresSite;
use App\Models\ClientesSite;
use App\Models\Parceiros;
use App\Models\Estados;
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
		return view('site.home', compact(''));
	}

	public function dibandeja_para_voce()
	{
		return view('site.dibandeja-pra-voce', compact(''));
	}

	public function sobre()
	{
		return view('site.sobre', compact(''));
	}
	public function participe()
	{
		return view('site.participe', compact(''));
	}
	public function contato()
	{
		return view('site.contato', compact(''));
	}

	public function clientePF()
	{
		$estados = Estados::all();
		return view('site.clientepf', compact('estados'));
	}

	public function clientePJ()
	{
		$estados = Estados::all();
		return view('site.clientepj', compact('estados'));
	}

	public function fornecedor()
	{
		$estados = Estados::all();
		return view('site.fornecedor', compact('estados'));
	}

	public function parceiro()
	{
		$estados = Estados::all();
		return view('site.parceiro', compact('estados'));
	}

	public function storeContato()
	{
		return view('site.contato', compact(''));
	}

	public function storeClientePF()
	{
		$dados = Input::all();
		$validator = Validator::make($dados, [
			'nome'    	=> 'required',
			'email'		=> 'required',
			'cep'		=> 'required',
			'endereco'	=> 'required',
			'bairro'	=> 'required',
			'cidade'	=> 'required',
			'estado'	=> 'required',
			'telefone'	=> 'required'
			
		]);

		if ($validator->fails()) {
			return Redirect::route('cliente.pf')
					->withErrors($validator)
					->withInput();
		}

		try {
			$dados['pessoa'] = 'Física';

			ClientesSite::create($dados);
			return redirect()->route('cliente.pf')
					->with('success', 'É uma prazer tê-lo cadastrado no DiBandeja. Sinta-se na sua cozinha.');
		} catch (\Exception $ex) {
			return back()
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
			'telefone'          => 'required'
		]);

		if ($validator->fails()) {
			return back()
					->withErrors($validator)
					->withInput();
		}

		try {
			$dados['pessoa'] = 'Juridica';
			ClientesSite::create($dados);
			return redirect()->route('cliente.pj')
					->with('success', 'Obrigada pelo cadastramento. O nosso negócio é ajudar o seu.');
		} catch (\Exception $ex) {
			return back()
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
			'telefone'          => 'required'
		]);

		if ($validator->fails()) {
			return back()
					->withErrors($validator)
					->withInput();
		}

		try {
			FornecedoresSite::create($dados);
			return redirect()->route('fornecedor')
					->with('success', 'É um prazer tê-lo cadastrado no DiBandeja. O nosso negócio é ajudar o seu. E vice-versa.');
		} catch (\Exception $ex) {
			return back()
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
			'telefone'      => 'required'
		]);

		if ($validator->fails()) {
			return back()
					->withErrors($validator)
					->withInput();
		}

		try {
			Parceiros::create($dados);
			return redirect()->route('parceiro')
					->with('success', 'É um prazer tê-lo cadastrado no DiBandeja. O nosso negócio é ajudar o seu. E vice-versa.');
		} catch (\Exception $ex) {
			return back()
				->withErrors($validator)
				->withInput();
		}
	}
}
