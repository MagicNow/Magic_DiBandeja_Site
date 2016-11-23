@extends('site/master')

@section('content')


<div class="header_interna">
	<h2>
		<img src="assets/images/bg_contato.png">
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
					<a href="#">Dibandeja pra você</a>
				</li>
			</ul>
		</div>


		<div class="content_form col-sm-12 col-md-7 col-lg-7">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor sed libero et placerat.
			Pellentesque fermentum sapien ut turpis fermentum convallis. Nullam quis magna vitae turpis
			vestibulum ullamcorper id aliquet metus. </p>

			<form class="form_sobre col-sm-12 col-md-9 col-lg-9" action="" method="">
				<fieldset>
					<label>
						<select>
							<option value="">Escolha o assunto</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</label>

					<label>
						<textarea>
							
						</textarea>
					</label>
					<button type="submit" id="enviar">Continuar</button>
				</fieldset>
			</form>
		</div>

		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<a href="#" class="bt_red_solicite bt_red_solicite_after"></a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<a href="#" class="bt_red_solicite bt_red_solicite_after"></a>
			</div>
		</div>
		
	</div>
</section>

@endsection