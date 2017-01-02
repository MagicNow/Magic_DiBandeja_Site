@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="title-fornecedor header-title">Seja um fornecedor</h2>
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
		    @if (session('success'))
		        <div class="alert alert-success">
		            {{ session('success') }}
		        </div>
		    @endif
			<form class="form_cliente col-sm-8 col-md-9 col-lg-9" action="{{route('fornecedor.store')}}" method="post">
				<fieldset>
					<label>
						<input type="text" placeholder="RAZÃO SOCIAL" name="razao_social" value="{{ old('razao_social') }}">
					</label>		
					<label>
						<input type="text" placeholder="NOME FANTASIA" name="nome_fantasia" value="{{ old('nome_fantasia') }}">
					</label>	
					<label>
						<input type="text" placeholder="ESPECIALIDADE" name="especialidade" value="{{ old('especialidade') }}">
					</label>		
					<label>
						<input type="url" placeholder="URL" name="url" value="{{ old('url') }}">
					</label>
					{{-- <label>
						<input type="text" placeholder="Cotação" name="cotacao" value="{{ old('cotacao') }}">
					</label> --}}
					<label>
						<input type="tel" placeholder="TELEFONE" id="phone" name="telefone" value="{{ old('telefone') }}">
					</label>
					<label>
						<input type="text" placeholder="CEP" name="cep" value="{{ old('cep') }}">
					</label>
					<label>
						<select name="estado" class="form-estado">
							<option value="">ESTADO</option>
							@foreach ($estados as $estado)
								<option value="{{ $estado->uf }}">{{ $estado->nome }}</option>
							@endforeach
						</select>
					</label>
					<label>
						<input type="text" placeholder="CIDADE" name="cidade" value="{{ old('cidade') }}">
					</label>
					<label>
						<input type="text" placeholder="BAIRRO" name="bairro" value="{{ old('bairro') }}">
					</label>
					<label>
						<input type="text" placeholder="ENDEREÇO" name="endereco" value="{{ old('endereco') }}">
					</label>
					<label>
						<input type="number" placeholder="NÚMERO" name="numero" value="{{ old('numero') }}">
					</label>
					<label>
						<input type="text" placeholder="COMPLEMENTO" name="complemento" value="{{ old('complemento') }}">
					</label>
					
					<button type="submit" id="enviar">Continuar</button>
				</fieldset>
			</form>
		</div>
		
	</div>
</section>

@endsection