@extends('admin.app')

@section('contentheader_title')
    Nova receita
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
      {!! Form::open(array('route' => array('admin.receitas.store',isset($receita->id) ? $receita->id : ''),'method' => 'POST','files'=>false)) !!}
	
		
		<div class="form-group">
			<label for="">Título</label>
			{!! Form::text('titulo',isset($receita->titulo) ? $receita->titulo : '',array('class' => 'form-control','placeholder'=>'Título*','id'=>'titulo','autocomplete'=>'off') )!!}

		</div>
        <div class="form-group">
            <label for="">Subtítulo</label>
            {!! Form::text('subtitulo',isset($receita->subtitulo) ? $receita->subtitulo : '',array('class' => 'form-control','placeholder'=>'Subtítulo','id'=>'titulo','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
        <label>Ingredientes</label>
        {!! Form::select('ingredientes[]', $ingredientes, isset($receita->ingredientes) ? $receitas_ingredientes : '',array('class' => 'form-control select2','id'=>'ingredientes','multiple'=>'multiple')) !!}        
      </div>

        <div class="form-group">
            <label for="">Modo de Preparo</label>
            {!! Form::textarea('preparo',isset($receita->preparo) ? $receita->preparo : '',array('class' => 'form-control','placeholder'=>'Modo de Preparo*') )!!}
        </div>
        <div class="form-group">
            <label for="">Observações</label>
            {!! Form::textarea('observacoes',isset($receita->observacoes) ? $receita->observacoes : '',array('class' => 'form-control','placeholder'=>'Observações') )!!}
        </div>


       <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	{!! Form::close() !!}

@endsection