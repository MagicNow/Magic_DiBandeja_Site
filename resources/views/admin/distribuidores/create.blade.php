@extends(app('request')->input('type') === 'modal' ? 'admin.modal' : 'admin.app')

@section('contentheader_title')
	Nova caracteristica
@endsection


@section('main-content')
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>    
	@endif
	@if (session('sucess'))
		<div class="alert alert-success">
			{{ session('sucess') }}
		</div>
	@endif

	@if (app('request')->input('type') != 'modal')
		{!! Form::open(array('route' => array('admin.distribuidores.store',isset($distribuidor->id) ? $distribuidor->id : ''),'method' => 'POST', 'files'=>false)) !!}

			<div class="form-group">
				<label for="">Nome</label>
				{!! Form::text('nome', isset($distribuidor->nome) ? $distribuidor->nome : '', array('class' => 'form-control', 'placeholder' => 'Nome*', 'id' => 'nome', 'autocomplete' => 'off') )!!}
			</div>
	@endif
		<div class="form-group">
			<label for="">URL</label>
			{!! Form::text('url', isset($distribuidor->url) ? $distribuidor->url : '', array('class' => 'form-control', 'placeholder' => 'URL', 'id' => 'url', 'autocomplete' => 'off') )!!}
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="">Endereço</label>
				{!! Form::text('endereco', isset($distribuidor->endereco) ? $distribuidor->endereco : '', array('class' => 'form-control', 'placeholder' => 'Endereço', 'id' => 'endereco', 'autocomplete' => 'off') )!!}
			</div>
			<div class="form-group col-md-6">
				<label for="">Telefone</label>
				{!! Form::text('telefone', isset($distribuidor->telefone) ? $distribuidor->telefone : '', array('class' => 'form-control', 'placeholder' => 'Telefone', 'id' => 'telefone', 'autocomplete' => 'off') )!!}
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="">Delivery</label>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-secondary {{ $delivery['sim'] === 'checked' ? 'active' : '' }}">
						<input type="radio" name="delivery" id="delivery-sim" value="sim" autocomplete="off" {{ $delivery['sim'] }}> Sim
					</label>
					<label class="btn btn-secondary {{ $delivery['nao'] === 'checked' ? 'active' : '' }}">
						<input type="radio" name="delivery" id="delivery-nao" value="não" autocomplete="off" {{ $delivery['nao'] }}> Não
					</label>
				</div>
			</div>
			<div class="form-group col-md-6">
				<label for="">Venda online</label>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-secondary {{ $venda_online['sim'] === 'checked' ? 'active' : '' }}">
						<input type="radio" name="venda_online" id="venda-online-sim" value="sim" autocomplete="off" {{ $venda_online['sim'] }}> Sim
					</label>
					<label class="btn btn-secondary {{ $venda_online['nao'] === 'checked' ? 'active' : '' }}">
						<input type="radio" name="venda_online" id="venda-online-nao" value="não" autocomplete="off" {{ $venda_online['nao'] }}> Não
					</label>
				</div>
			</div>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-warning distribuidores-submit">Salvar ponto de venda</button>
		</div>
	@if (app('request')->input('type') != 'modal')
		{!! Form::close() !!}
	@endif
@endsection