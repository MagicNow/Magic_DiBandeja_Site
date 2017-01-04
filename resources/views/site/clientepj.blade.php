@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="title-pj header-title">Faça um pedido para seu negócio</h2>
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
					<a href="#">Faça seu pedido / </a>
				</li>
				<li>
					<a href="#">Para o seu negócio</a>
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
		    @if (session('success'))
		        <div class="alert alert-success">
		            {{ session('success') }}
		        </div>
		    @endif
			<form class="form_cliente col-sm-8 col-md-9 col-lg-9" action="{{route('cliente.pj.store')}}" method="post">
				<fieldset>
					<label>
						<input type="text" placeholder="RAZÃO SOCIAL" name="razao_social" value="{{ old('razao_social') }}">
					</label>
					<label>
						<input type="tel" placeholder="TELEFONE 1" id="phone" name="telefone" value="{{ old('telefone') }}">
					</label>
					<label>
						<input type="tel" placeholder="TELEFONE 2" id="phone2" name="telefone2" value="{{ old('telefone2') }}">
					</label>
					<label>
						<input type="email" placeholder="E-MAIL" name="email" value="{{ old('nomeemail') }}">
					</label>
					<label>
						<input type="text" placeholder="CEP" name="cep" value="{{ old('cep') }}">
					</label>
					<label>
						<select name="estado" class="form-estado">
							<option value="">ESTADO</option>
							@foreach ($estados as $estado)
								<option value="{{ $estado->uf }}" @if (old('estado') == $estado->uf) selected="selected" @endif>{{ $estado->nome }}</option>
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