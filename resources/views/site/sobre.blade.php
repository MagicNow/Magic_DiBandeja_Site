@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="header-title title-sobre">Sobre o DiBandeja</h2>
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
					<a href="#">Sobre o Dibandeja</a>
				</li>
			</ul>
		</div> 


		<div class="content_contato">
			<div class="container sobre">
				<p>O DiBandeja, como o próprio nome diz, quer simplificar e facilitar o seu dia-a-dia na cozinha.</p>
				<p>É um site que reinventa o funcionamento gastronômico de uma casa, de forma organizada, customizada, prática e deliciosa.</p>
				<p>Para pessoas de todas as idades, para famílias de todos os tamanhos, o DiBandeja veio para acabar com aquela eterna dúvida: o que temos hoje para o café, para o lanche, para o almoço, para o jantar…você passa o seu briefing gastronômico e a gente responde com sugestões de cardápios.</p>
				<p>O DiBandeja cria cardápios especiais, específicos para sua família, com receitas que selecionamos em nosso Banco de Dados. Tudo pesquisado a partir de receitas de famílias, de amigos, de famosos e nem tão famosos chefs, de bloggers, de colaboradores, de autores culinários e amantes da gastronomia.</p>
				<p>Esses estudos gastronômicos personalizados podem servir também para empresas do setor alimentício e a donos de bares e restaurantes, de acordo com a necessidade individual de cada um.</p>
				<p>Faça um pedido. Nós teremos o maior prazer em desenvolver um cardápio DiBandeja para você.</p>

				<a href="{{ route('cliente.pf') }}" target="_self" class="sobre-botao">PARA A SUA CASA</a>
				<a href="{{ route('cliente.pj') }}" target="_self" class="sobre-botao">PARA O SEU NEGÓCIO</a>

				{{-- <ul class="sobre_pessoas col-sm-12 col-md-12 col-lg-12">
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
			</div> --}}

		</div>
		
	</div>
</section>

@endsection