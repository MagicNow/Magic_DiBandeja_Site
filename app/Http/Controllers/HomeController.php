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

use App\Mail\NovoPedidoPF;
use App\Mail\NovoPedidoPJ;
use App\Mail\FornecedorMail;
use App\Mail\ParceiroMail;
use Illuminate\Support\Facades\Mail;


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
			'telefone'	=> 'required',
		]);

		if ($validator->fails()) {
			return Redirect::route('cliente.pf')
					->withErrors($validator)
					->withInput();
		}

		try {
			$dados['pessoa'] = 'Física';

			$cliente 	= ClientesSite::create($dados);
			$mail 		= Mail::to(env('MAIL_TO'));
			$mail->send(new NovoPedidoPF($cliente));

			return redirect()->route('cliente.pf')
					->with('success', 'É uma prazer tê-lo cadastrado no DiBandeja. Sinta-se na sua cozinha.');
		} catch (\Exception $ex) {
			return back()
				->withErrors($ex->getMessage())
				->withInput();
		}
	}

	public function storeClientePJ()
	{
		$dados = Input::all();
		$validator = Validator::make($dados, [
			'razao_social'      => 'required',
			'email'             => 'required',
			'telefone'          => 'required'
		]);

		if ($validator->fails()) {
			return back()
					->withErrors($validator)
					->withInput();
		}

		try {
			$dados['pessoa'] = 'Juridica';

			$cliente 	= ClientesSite::create($dados);
			$mail 		= Mail::to(env('MAIL_TO'));
			$mail->send(new NovoPedidoPJ($cliente));

			return redirect()->route('cliente.pj')
					->with('success', 'Obrigada pelo cadastramento. O nosso negócio é ajudar o seu.');
		} catch (\Exception $ex) {
			return back()
				->withErrors($ex->getMessage())
				->withInput();
		}
	}

	public function storeFornecedor()
	{
		$dados = Input::all();
		$validator = Validator::make($dados, [
			'razao_social'      => 'required',
			'nome_fantasia'     => 'required',
			'telefone'          => 'required',
			'nome_contato'		=> 'required',
			'url'				=> 'regex:/[^.]([\.])[^.]/',
		]);

		if ($validator->fails()) {
			return back()
					->withErrors($validator)
					->withInput();
		}

		try {
			$fornecedor = FornecedoresSite::create($dados);
			$mail 		= Mail::to(env('MAIL_TO'));
			$mail->send(new FornecedorMail($fornecedor));

			return redirect()->route('fornecedor')
					->with('success', 'É um prazer tê-lo cadastrado no DiBandeja. O nosso negócio é ajudar o seu. E vice-versa.');
		} catch (\Exception $ex) {
			return back()
				->withErrors($ex->getMessage())
				->withInput();
		}
	}

	public function storeParceiro()
	{
		$dados = Input::all();
		$validator = Validator::make($dados, [
			'nome'          => 'required',
			'email'         => 'required',
			'telefone'      => 'required',
			'url'			=> 'regex:/[^.]([\.])[^.]/',
		]);

		if ($validator->fails()) {
			return back()
					->withErrors($validator)
					->withInput();
		}

		try {
			$parceiro 	= Parceiros::create($dados);
			$mail 		= Mail::to(env('MAIL_TO'));
			$mail->send(new ParceiroMail($parceiro));

			return redirect()->route('parceiro')
					->with('success', 'É um prazer tê-lo ao nosso lado no DiBandeja. Também estamos ao seu lado.');
		} catch (\Exception $ex) {
			return back()
				->withErrors($ex->getMessage())
				->withInput();
		}
	}
}
