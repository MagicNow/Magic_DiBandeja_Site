@extends(app('request')->input('type') === 'modal' ? 'admin.modal' : 'admin.app')

@section('contentheader_title')
    Novo Grupo
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
      {!! Form::open(array('route' => array('admin.grupos.store',isset($grupo->id) ? $grupo->id : ''),'method' => 'POST','files'=>false)) !!}
	
		
		<div class="form-group">
			<label for="">Nome</label>
			{!! Form::text('nome',isset($grupo->nome) ? $grupo->nome : '',array('class' => 'form-control','placeholder'=>'Nome*','id'=>'nome','autocomplete'=>'off') )!!}
		</div>

       <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	{!! Form::close() !!}
@endsection