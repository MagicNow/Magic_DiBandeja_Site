@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="title-pf header-title">Faça um negócio para sua casa</h2>
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
					<a href="#">Faça seu pedido / </a>
				</li>
				<li>
					<a href="#">Para sua casa</a>
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
						<input type="text" placeholder="NOME COMPLETO" name="nome">
					</label>	
					<label>
						<input type="email" placeholder="E-MAIL" name="email">
					</label>				
					<label>
						<input type="tel" placeholder="TELEFONE 1" id="phone" name="telefone">
					</label>
					<label>
						<input type="tel" placeholder="TELEFONE 2" id="phone2" name="telefone2">
					</label>
					
					<button type="submit" id="enviar">Continuar</button>
				</fieldset>
			</form>
		</div>
		
	</div>
</section>

@endsection