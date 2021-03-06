@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="title-fornecedor header-title">Seja um fornecedor</h2>
</div>	

<section class="interna_dibandeja content">
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


		<div class="content_form col-sm-12 form">
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
		    @if (!session('success'))
				<div class="row">
			    	<p class="col-sm-6 col-md-5 col-lg-5">Nós temos o maior prazer em tê-lo como um dos fornecedores do DiBandeja. Cadastre-se conosco.</p>
					<form class="form_cliente col-sm-6 col-md-7 col-lg-7" action="{{route('fornecedor.store')}}" method="post">
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
								<input type="text" placeholder="URL" name="url" value="{{ old('url') }}">
							</label>
							{{-- <label>
								<input type="text" placeholder="Cotação" name="cotacao" value="{{ old('cotacao') }}">
							</label> --}}
							<label>
								<input type="text" placeholder="NOME DO CONTATO" name="nome_contato" value="{{ old('nome_contato') }}">
							</label>
							<label>
								<input type="tel" placeholder="TELEFONE" id="phone" name="telefone" value="{{ old('telefone') }}">
							</label>
							<label>
								<input type="tel" placeholder="TELEFONE 2" id="phone2" name="telefone2" value="{{ old('telefone2') }}">
							</label>
							<label>
								<input type="text" placeholder="CEP" name="cep" value="{{ old('cep') }}">
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
							<label>
								<input type="text" placeholder="BAIRRO" name="bairro" value="{{ old('bairro') }}">
							</label>
							<label>
								<input type="text" placeholder="CIDADE" name="cidade" value="{{ old('cidade') }}">
							</label>
							<label>
								<select name="estado" class="form-estado">
									<option value="">ESTADO</option>
									@foreach ($estados as $estado)
										<option value="{{ $estado->uf }}" @if (old('estado') == $estado->uf) selected="selected" @endif>{{ $estado->nome }}</option>
									@endforeach
								</select>
							</label>
							<button type="submit" id="enviar">Continuar</button>
						</fieldset>
					</form>
				</div>
			@endif
		</div>
		
	</div>
</section>

@endsection