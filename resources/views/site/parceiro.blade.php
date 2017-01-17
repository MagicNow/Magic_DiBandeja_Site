@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="header-title title-parceiro">Seja um Parceiro / Colaborador</h2>
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
					<a href="#">Parceiro e colaborador</a>
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
					<div class="col-sm-6 col-md-5 col-lg-5">
						<p>Escreva para o DiBandeja! Você é um escritor, um blogger de comida, é da área de nutrição, é fotógrafo, criador de receitas, um amante da gastronomia e quer escrever para o site? Mande um artigo para <a href="mailto:ola@dibandeja.com.br">ola@dibandeja.com.br</a> e, se quiser, anexe fotos de alta resolução e ilustrações exclusivas. Siga as seguintes guidelines:</p>

						<p><strong>Frescor!</strong> Por favor não envie receitas que você já enviou antes.</p>

						<p><strong>Relevância!</strong> Comida, receitas, cozinhar, dicas de cozinha e como fazer. Tudo relacionado à gastronomia são tópicos que valem!</p>

						<p><strong>Seja Conciso!</strong> Valorizamos qualidade e não quantidade (pense em algo com menos de 500 palavras).</p>

						<p><strong>Tenha Progressão!</strong> Temos uma grande audiência de pessoas que cozinham em casa e em restaurantes, de chefs, de bloggers, autores culinários e amantes da gastronomia. Por isso, algo com imenso appeal normalmente é melhor.</p>

						<p><strong>Fotos, Muitas Fotos e Também Ilustrações! </strong>Adoramos receber fotos grandes e bonitas e ilustrações exclusivas, relacionadas à gastronomia. Por favor mande várias junto com seu artigo.

						Tem novas idéias? Mande um email para <a href="mailto:ola@dibandeja.com.br"> ola@dibandeja.com.br</a> e nós adoraremos recebê-las!</p>
					</div>

					<form class="form_cliente col-sm-6 col-md-7 col-lg-7" action="{{route('parceiro.store')}}" method="post">
						<fieldset>
							<label for="tipo-parceiro" class="parceiro-tipo"><input class="radio" id="tipo-parceiro" type="radio" name="tipo" value="PARCEIRO" @if (old('tipo') == "PARCEIRO") checked="checked" @endif>PARCEIRO</label>
							<label for="tipo-colaborador" class="parceiro-tipo"><input type="radio" id="tipo-colaborador" class="radio" name="tipo" value="COLABORADOR" @if (old('tipo') == "COLABORADOR") checked="checked" @endif>COLABORADOR</label>
							<br>
							<label>
								
							<label>
								<input type="text" placeholder="NOME COMPLETO" name="nome" value="{{ old('nome') }}">
							</label>		
							<label>
								<input type="text" placeholder="APELIDO" name="apelido" value="{{ old('apelido') }}">
							</label>	
							<label>
								<input type="text" placeholder="PROFISSÃO" name="profissao" value="{{ old('profissao') }}">
							</label>		
							<label>
								<input type="email" placeholder="E-MAIL" name="email" value="{{ old('email') }}">
							</label>
							<label>
								<input type="tel" placeholder="TELEFONE" id="phone" name="telefone" value="{{ old('telefone') }}">
							</label>
							<label>
								<input type="url" placeholder="URL" name="url" value="{{ old('url') }}">
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