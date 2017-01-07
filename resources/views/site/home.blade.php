@extends('site/master')
@section('content')
<section class="content">

	<div class="destaque">
		{{-- <div class="content_destaque salada_ideias">
			<figure>
				<a href="#">
					<img class="image_destaque" src="assets/images/bg_03.png">
				</a>
			</figure>
			<a href="#" class="btn_escolha">Clique & Escolha</a>
		</div> --}}

		<div class="content_destaque dibandeja_voce" style="">
			<figure>
				<a href="#">
					<img class="image_destaque banner-desktop" src="assets/images/bg_01.jpg">
					<img class="image_destaque banner-mobile" src="assets/images/bg_01-mobile.jpg">
				</a>
			</figure>
			<a href="{{ route('dibandeja-pra-voce') }}" class="btn_escolha">Clique & Escolha</a>
		</div>

		{{-- <div class="content_destaque dibanpedia" style="display: none">
			<figure>
				<a href="#">
					<img class="image_destaque" src="assets/images/bg_02.png">
				</a>
			</figure>
			<a href="#" class="btn_escolha">Clique & Escolha</a>
		</div> --}}
	</div>

	<div class="container">
		
		{{-- <div class="tipos_dibandeja col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<ul>
				<li data-tipo="salada_ideias" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<a href="#">
						<img src="assets/images/ico_1.png" alt="Salada Didéias" title="Salada Didéias">
					</a>
				</li>

				<li data-tipo="dibandeja_voce" class=""> 
					<a href="#">
						<img src="assets/images/ico_2.png" alt="DiBandeja pra você" title="DiBandeja pra você">
					</a>
				</li>

				<li data-tipo="dibanpedia" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<a href="#">
						<img src="assets/images/ico_3.png" alt="DiBanpédia" title="DiBanpédia">
					</a>
				</li>
			</ul>
		</div> --}}

	</div>

</section>

@endsection
