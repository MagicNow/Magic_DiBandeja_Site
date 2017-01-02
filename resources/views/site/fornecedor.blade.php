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
					<a href="#">Fornecedor</a>
				</li>
			</ul>
		</div> 


		<div class="content_form col-sm-12">
			<p>Nós temos o maior prazer em tê-lo como um dos fornecedores do DiBandeja. Cadastre-se conosco.</p>
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
			<form class="form_cliente col-sm-8 col-md-9 col-lg-9" action="{{route('fornecedor.store')}}" method="post">
				<fieldset>
					<label>
						<input type="text" placeholder="Razão social" name="razao_social">
					</label>		
					<label>
						<input type="text" placeholder="Nome fantasia" name="nome_fantasia">
					</label>	
					<label>
						<input type="text" placeholder="Especialidade" name="especialidade">
					</label>		
					<label>
						<input type="text" placeholder="Url" name="url">
					</label>
					{{-- <label>
						<input type="text" placeholder="Cotação" name="cotacao">
					</label> --}}
					<label>
						<input type="text" placeholder="telefone" id="phone" name="telefone">
					</label>
					<label>
						<input type="text" placeholder="CEP" name="cep">
					</label>
					<label>
						<input type="text" placeholder="Endereço" name="endereco">
					</label>
					<label>
						<input type="text" placeholder="Número" name="numero">
					</label>
					<label>
						<input type="text" placeholder="Complemento" name="complemento">
					</label>
					<label>
						<input type="text" placeholder="Bairro" name="bairro">
					</label>
					<label>
						<input type="text" placeholder="Cidade" name="cidade">
					</label>
					<label>
						<input type="text" placeholder="Estado" name="estado">
					</label>
					
					<button type="submit" id="enviar">Continuar</button>
				</fieldset>
			</form>
		</div>
		
	</div>
</section>

@endsection