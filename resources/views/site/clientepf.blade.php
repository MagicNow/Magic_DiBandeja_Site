@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="title-pf header-title">Faça um negócio para sua casa</h2>
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
					<a href="#">Faça seu pedido / </a>
				</li>
				<li>
					<a href="#">Para a sua casa</a>
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
			    	<p class="col-sm-6 col-md-5 col-lg-5">Faça um pedido. Nós teremos o maior prazer em desenvolver um cardápio DiBandeja para você.</p>
					<form class="form_cliente col-sm-6 col-md-7 col-lg-7" action="{{ route('cliente.pf.store') }}" method="post">
						<fieldset>
							<label>
								<input type="text" placeholder="NOME COMPLETO" name="nome" value="{{ old('nome') }}">
							</label>
							<label>
								<input type="tel" placeholder="TELEFONE 1" id="phone" name="telefone" value="{{ old('telefone') }}">
							</label>
							<label>
								<input type="tel" placeholder="TELEFONE 2" id="phone2" name="telefone2" value="{{ old('telefone2') }}">
							</label>
							<label>
								<input type="email" placeholder="E-MAIL" name="email" value="{{ old('email') }}">
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