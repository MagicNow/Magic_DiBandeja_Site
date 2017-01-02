@extends('site/master')

@section('content')


<div class="header_interna">
	<h2 class="title_sobre">
		{{-- <img src="assets/images/bg_sobre.png"> --}}
	</h2>
</div>	

<section id="interna_dibandeja" class="content">
	<div class="container">

		<div class="breadcrumb">
			<ul>
				<li>Você está em</li>
				<li>
					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</li>
				<li>
					<a href="#">Home / </a>
				</li>
				<li>
					<a href="#">Cliente Pessoa Jurídica</a>
				</li>
			</ul>
		</div> 


		<div class="content_form col-sm-12">
			<p>Faça a sua solicitação. Nós teremos o maior prazer em desenvolver um projeto DiBandeja para você.</p>
			@if(count($errors) > 0)
		        <div class="alert alert-danger">
		            @foreach ($errors->all() as $message)
		                {!! $message!!}<br />
		            @endforeach
		        </div>
		        
		    @endif
		    @if (session('sucess'))
		        <div class="alert alert-success">
		            {{ session('sucess') }}
		        </div>
		    @endif
			<form class="form_cliente col-sm-8 col-md-9 col-lg-9" action="{{route('cliente.pj.store')}}" method="post">
				<fieldset>
					<label>
						<input type="text" placeholder="RAZÃO SOCIAL" name="razao_social">
					</label>					
					<label>
						<input type="text" placeholder="CEP" name="cep">
					</label>
					<label>
						<input type="text" placeholder="ESTADO" name="estado">
					</label>
					<label>
						<input type="text" placeholder="CIDADE" name="cidade">
					</label>
					<label>
						<input type="text" placeholder="ENDEREÇO" name="endereco">
					</label>
					<label>
						<input type="number" placeholder="NÚMERO" name="numero">
					</label>
					<label>
						<input type="text" placeholder="COMPLEMENTO" name="complemento">
					</label>
					<label>
						<input type="text" placeholder="BAIRRO" name="bairro">
					</label>
					<label>
						<input type="tel" placeholder="TELEFONE 1" id="phone" name="telefone">
					</label>
					<label>
						<input type="tel" placeholder="TELEFONE 2" id="phone2" name="telefone2">
					</label>
					<label>
						<input type="email" placeholder="E-MAIL" name="email">
					</label>
					<button type="submit" id="enviar">Continuar</button>
				</fieldset>
			</form>
		</div>
		
	</div>
</section>

@endsection