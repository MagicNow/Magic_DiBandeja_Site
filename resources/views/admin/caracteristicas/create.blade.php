@extends(app('request')->input('type') === 'modal' ? 'admin.modal' : 'admin.app')

@section('contentheader_title')
    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> {{ isset($caracteristica->id) ? 'Editar' : ' Nova' }} caracteristica
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
      {!! Form::open(array('route' => array('admin.caracteristicas.store',isset($caracteristica->id) ? $caracteristica->id : ''),'method' => 'POST','files'=>false)) !!}
	
		
		<div class="form-group">
			<label for="">Descrição</label>
			{!! Form::text('descricao',isset($caracteristica->descricao) ? $caracteristica->descricao : '',array('class' => 'form-control','placeholder'=>'Descrição*','id'=>'descricao','autocomplete'=>'off') )!!}
		</div>

       <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	{!! Form::close() !!}
@endsection