@extends('site/master')

@section('content')


<div class="header_interna">
	<h2 class="title_dibandeja">
		{{-- <img src="assets/images/bg_dibandeja_interna.png"> --}}
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
					<a href="#">Dibandeja para você</a>
				</li>
			</ul>
		</div> 


		<div class="content_infos">
			 
			 <div class="container">
			 	
				<div class="infos_left col-sm-12 col-md-6 col-lg-6">
					<img src="assets/images/interna_01.png">
					<a href="{{ route('cliente.pf') }}" class="bt_red_solicite"></a>
				</div>

				<div class="infos_right col-sm-12 col-md-6 col-lg-6">
					<img src="assets/images/interna_02.png">
					<a href="{{ route('cliente.pj') }}" class="bt_red_veja"></a>
				</div>

			 </div>

		</div>
		
	</div>
</section>

@endsection