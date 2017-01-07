@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="title_sobre header-title">
		{{-- <img src="assets/images/bg_sobre.png"> --}}
	</h2>
</div>	

<section class="interna-dibandeja content">
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
					<a href="#">Participe do DiBandeja</a>
				</li>
			</ul>
		</div> 


		<div class="content_contato">
			<div class="container sobre">

				<ul class="sobre_pessoas col-sm-12 col-md-12 col-lg-12">
					<li class="col-sm-12 col-md-3 col-lg-3">
						<p>Cliente</p>
					</li>
					<li class="col-sm-12 col-md-3 col-lg-3">
						<p>Fornecedor</p>
					</li>
					<li class="col-sm-12 col-md-3 col-lg-3">
						<p>Parceiro</p>
					</li>
					<li class="col-sm-12 col-md-3 col-lg-3">
						<p>Colaborador</p>
					</li>
				</ul>

				<ul class="sobre_qualidade col-sm-12 col-md-12 col-lg-12">
					<li>
						<h3>Frescor</h3>
						<p>Por favor não envie receitas que você já enviou antes.</p>
					</li>
					<li>
						<h3>Relevância</h3>
						<p>Comida, receitas, cozinhar, dicas de cozinha e como fazer. Tudo relacionado à gastronomia são tópicos que valem!</p>
					</li>
					<li>
						<h3>Seja Conciso</h3>
						<p>Valorizamos qualidade e não quantidade (pense em algo com menos de 500 palavras).</p>
					</li>
					<li>
						<h3>Tenha Progressão</h3>
						<p>Temos uma grande audiência de pessoas que cozinham em casa e em restaurantes, de chefs, de bloggers, autores culinários e amantes da gastronomia. Por isso, algo com imenso appeal normalmente é melhor.</p>
					</li>
					<li>
						<h3>Fotos, muitas fotos e ilustrações</h3>
						<p>Adoramos receber fotos grandes e bonitas e ilustrações exclusivas, relacionadas à gastronomia. Por favor mande várias junto com seu artigo.</p>
					</li>
				</ul>

				<p>Tem novas idéias? Mande um email para <a href="mailto:ola@dibandeja.com.br"> ola@dibandeja.com.br</a> e nós adoraremos recebê-las!</p>

			</div>
		</div>
		
	</div>
</section>

@endsection