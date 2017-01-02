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
					<a href="#">Cliente Pessoa Física</a>
				</li>
			</ul>
		</div> 


		<div class="content_form col-sm-12">
			<p>Faça um pedido. Nós teremos o maior prazer em desenvolver um cardápio DiBandeja para você. </p>
			@if(count($errors) > 0)
		        <div class="alert alert-danger">
		            @foreach ($errors->all() as $message)
		                {!! $message!!}<br />
		            @endforeach
		        </div>
		        
		    @endif
		    @if (session('sucess'))
		        <div class="alert alert-success">
		            {{ session('sucess') }}
		        </div>
		    @endif
			<form class="form_cliente col-sm-8 col-md-9 col-lg-9" action="{{route('cliente.pf.store')}}" method="post">
				<fieldset>
					<label>
						<input type="text" placeholder="Nome completo" name="nome">
					</label>	
					<label>
						<input type="text" placeholder="Email" name="email">
					</label>				
					<label>
						<input type="text" placeholder="Telefone 1" id="phone" name="telefone">
					</label>
					<label>
						<input type="text" placeholder="Telefone 2" id="phone2" name="telefone2">
					</label>
					
					<button type="submit" id="enviar">Continuar</button>
				</fieldset>
			</form>
		</div>
		
	</div>
</section>

@endsection