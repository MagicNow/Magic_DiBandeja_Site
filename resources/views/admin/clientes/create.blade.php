@extends('admin.app')

@section('contentheader_title')
    Novo Cliente
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
      {!! Form::open(array('route' => array('admin.clientes.store',isset($clientes->id) ? $clientes->id : ''),'method' => 'POST','files'=>false)) !!}

		<div class="form-group">
			<label for="">Nome</label>
			{!! Form::text('nome',isset($cliente->nome) ? $cliente->nome : '',array('class' => 'form-control','placeholder'=>'Nome*','id'=>'nome','autocomplete'=>'off') )!!}
		</div>


       <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	{!! Form::close() !!}

@endsection
