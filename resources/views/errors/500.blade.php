@extends('site/master')

@section('content')

<section class="interna-dibandeja content page-error">
	<div class="container">
		<img src="{{ asset('assets/images/error-icon.png') }}" alt="Página não encontrada" class="page-error-image">
		<p class="page-error-title">Erro interno do sistema</p>
		<p class="page-error-description">Ocorreu uma instabilidade do sistema<br>
		que impediu a exibição do conteúdo</p>
	</div>
</section>

@endsection