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
					<a href="#">Parceiro e colaborador</a>
				</li>
			</ul>
		</div> 


		<div class="content_form col-sm-12">
			<p>Escreva para o DiBandeja! Você é um escritor, um blogger de comida, é da área de nutrição, é fotógrafo, criador de receitas, um amante da gastronomia e quer escrever para o site? Mande um artigo para <a href="mailto:ola@dibandeja.com.br">ola@dibandeja.com.br</a> e, se quiser, anexe fotos de alta resolução e ilustrações exclusivas. Siga as seguintes guidelines:</p>

<p><strong>Frescor!</strong> Por favor não envie receitas que você já enviou antes.</p>

<p><strong>Relevância!</strong> Comida, receitas, cozinhar, dicas de cozinha e como fazer. Tudo relacionado à gastronomia são tópicos que valem!</p>

<p><strong>Seja Conciso!</strong> Valorizamos qualidade e não quantidade (pense em algo com menos de 500 palavras).</p>

<p><strong>Tenha Progressão!</strong> Temos uma grande audiência de pessoas que cozinham em casa e em restaurantes, de chefs, de bloggers, autores culinários e amantes da gastronomia. Por isso, algo com imenso appeal normalmente é melhor.</p>

<p><strong>Fotos, Muitas Fotos e Também Ilustrações! </strong>Adoramos receber fotos grandes e bonitas e ilustrações exclusivas, relacionadas à gastronomia. Por favor mande várias junto com seu artigo.

Tem novas idéias? Mande um email para <a href="mailto:ola@dibandeja.com.br"> ola@dibandeja.com.br</a> e nós adoraremos recebê-las!</p>

			<form class="form_cliente col-sm-8 col-md-9 col-lg-9" action="{{route('parceiro.store')}}" method="post">
				<fieldset><br>
					<label>PARCEIRO
						<input class="radio" type="radio" name="tipo" value="PARCEIRO">
						COLABORADOR
						<input type="radio" class="radio" name="tipo" value="COLABORADOR">
					</label>
					<br>
					<label>
						
					<label>
						<input type="text" placeholder="Nome completo" name="nome">
					</label>		
					<label>
						<input type="text" placeholder="apelido" name="apelido">
					</label>	
					<label>
						<input type="text" placeholder="profissao" name="profissao">
					</label>		
					<label>
						<input type="text" placeholder="Email" name="email">
					</label>
					<label>
						<input type="text" placeholder="Telefone" id="phone"name="telefone">
					</label>
					<label>
						<input type="text" placeholder="Url" name="url">
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