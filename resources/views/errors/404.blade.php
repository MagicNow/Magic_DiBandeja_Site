@extends('site/master')

@section('content')

<section class="interna-dibandeja content page-error">
	<div class="container">
		<img src="{{ asset('assets/images/error-icon.png') }}" alt="Página não encontrada" class="page-error-image">
		<p class="page-error-title">Página não encontrada</p>
		<p class="page-error-description">O conteúdo que você solicitou não foi<br>
		encontrado em nossos servidores.</p>
	</div>
</section>

@endsection