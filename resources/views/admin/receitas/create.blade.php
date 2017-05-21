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
			<label for="">Nome</label>
			{!! Form::text('titulo',isset($receita->titulo) ? $receita->titulo : '',array('class' => 'form-control','placeholder'=>'Título*','id'=>'titulo','autocomplete'=>'off') )!!}
		</div>

        <div class="form-group">
            <label for="">Categoria</label>
            {!! Form::text('categoria',isset($receita->categoria) ? $receita->categoria : '',array('class' => 'form-control','placeholder'=>'Propriedades nutricionais','id'=>'categoria','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Propriedades nutricionais</label>
            {!! Form::text('propriedades_nutricionais',isset($receita->propriedades_nutricionais) ? $receita->propriedades_nutricionais : '',array('class' => 'form-control','placeholder'=>'Propriedades nutricionais','id'=>'propriedades_nutricionais','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Qualificação</label>
            {!! Form::text('qualificacao',isset($receita->qualificacao) ? $receita->qualificacao : '',array('class' => 'form-control','placeholder'=>'Qualificação','id'=>'qualificacao','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Benefícios</label>
            {!! Form::text('beneficios',isset($receita->beneficios) ? $receita->beneficios : '',array('class' => 'form-control','placeholder'=>'Benefícios','id'=>'beneficios','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Preparo</label>
            {!! Form::textarea('preparo',isset($receita->preparo) ? $receita->preparo : '',array('class' => 'form-control','placeholder'=>'Modo de preparo','rows'=>'4') )!!}
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4 col-sx-12">
                    <label>Tempo de preparo</label>
                    {!! Form::select('tempo', [0=>'Até 30 minutos',1=>'Entre 30 minutos e 1 hora',2=>'Mais de 1 hora'], isset($receita->tempo) ? $receita->tempo : '',array('class' => 'form-control','id'=>'tempo')) !!}
                </div>

                <div class="col-sm-4 col-sx-12">
                    <label>Dificuldade</label>
                    {!! Form::select('dificuldade', [0=>'Fácil',1=>'Médio',2=>'Difícil'], isset($receita->dificuldade) ? $receita->dificuldade : '',array('class' => 'form-control','id'=>'tempo')) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">Número de Porções</label>
            {!! Form::text('porcoes',isset($receita->porcoes) ? $receita->porcoes : '',array('class' => 'form-control','placeholder'=>'Número de Porções','id'=>'porcoes','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Conservação</label>
            {!! Form::textarea('conservacao',isset($receita->conservacao) ? $receita->conservacao : '',array('class' => 'form-control','placeholder'=>'Conservação','rows'=>'4') )!!}
        </div>

        <div class="form-group">
            <label for="">Calorias</label>
            {!! Form::text('calorias',isset($receita->calorias) ? $receita->calorias : '',array('class' => 'form-control','placeholder'=>'Calorias','id'=>'calorias','autocomplete'=>'off') )!!}
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="">Sazonalidade inicial</label>
                {!! Form::text('sazonalidade_inicial', isset($receita->sazonalidade_inicial) ? date('d/m/Y',strtotime($receita->sazonalidade_inicial)) : '',array('class' => 'form-control','placeholder'=>'Sazonalidade inicial*','id'=>'sazonalidade_inicial', 'autocomplete'=>'off') )!!}
            </div>

            <div class="form-group col-md-4">
                <label for="">Sazonalidade final</label>
                {!! Form::text('sazonalidade_final', isset($receita->sazonalidade_final) ? date('d/m/Y', strtotime($receita->sazonalidade_final)) : '', array('class' => 'form-control', 'placeholder'=>'Sazonalidade final*','id'=>'sazonalidade_final', 'autocomplete'=>'off')) !!}
            </div>
        </div>

        {{-- <div class="form-group">
            <label>Ingredientes</label>
            {!! Form::select('ingredientes[]', $ingredientes, isset($receita->ingredientes) ? $receitas_ingredientes : '',array('class' => 'form-control select2','id'=>'ingredientes','multiple'=>'multiple')) !!}
        </div> --}}
        <div class="form-group form-providers">
            <label for="fornecedores">Ingredientes</label>
            @if (isset($fornecedores_ingredientes))
                @foreach ($fornecedores_ingredientes as $key => $fornecedor)
                    {{-- <div class="row fornecedores-linha">
                        <div class="col-md-5 col-sm-12 component-mt-select" data-mt-request-url="/admin/fornecedores/list" data-mt-max-tags="1" data-mt-tag-input-name="fornecedores[]" data-mt-default-values='{"{{ $fornecedor->id }}":"{{ $fornecedor->nome }}"}'>
                            <div class="col-md-12 row">
                                <input type="text" class="form-control" data-mt-filter-control/>
                            </div>
                        </div>
                        <label for="fornecedores-custo" class="col-md-7 col-sm-12 col-xs-12">
                            <span class="col-md-1 col-sm-3 col-xs-3 fornecedores-label">Custo</span>
                            <div class="col-md-2 col-sm-3 col-xs-3">
                                {!! Form::input('text', 'fornecedores_custo[]', isset($fornecedor->pivot->custo) ? $fornecedor->pivot->custo : '', array('class' => 'form-control', 'placeholder'=>'R$...','id'=>'fornecedores_custo', 'autocomplete'=>'off') )!!}
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1 fornecedores-label">/</div>
                            <div class="col-md-3 col-sm-4 col-xs-4">
                                {!! Form::input('text', 'fornecedores_medida[]', isset($fornecedor->pivot->medida) ? $fornecedor->pivot->medida : '', array('class' => 'form-control', 'placeholder'=>'Medida','id'=>'fornecedores_medida', 'autocomplete'=>'off') )!!}
                            </div>
                            @if ($key === 0)
                                <button type="button" class="col-md-1 col-sm-1 col-xs-1 fornecedores-acrescentar">
                                    <span class="glyphicon glyphicon-plus-sign"></span>
                                </button>
                            @else
                                <button type="button" class="col-md-1 col-sm-1 col-xs-1 fornecedores-remover">
                                    <span class="glyphicon glyphicon-minus-sign"></span>
                                </button>
                            @endif
                        </label>
                    </div> --}}
                @endforeach
            @else
                <div class="row ingredientes-linha">
                    <div class="col-md-4 col-sm-12 component-mt-select" data-mt-request-url="/admin/ingredientes/list?type=modal" data-mt-max-tags="1" data-mt-tag-input-name="ingredientes[]">
                        <div class="col-md-12 row">
                            <input type="text" class="form-control" data-mt-filter-control />
                        </div>
                    </div>
                    <label for="ingredientes-custo" class="col-md-8 col-sm-12 col-xs-12">
                        <span class="col-md-2 col-sm-3 col-xs-3 ingredientes-label">Custo </span>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <input type="text" name="ingredientes_custo[]" class="form-control" class='form-control' placeholder='R$...' id='ingredientes_custo' autocomplete='off'>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 ingredientes-label text-center">/</div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <input type="text" name="ingredientes_medida[]" class="form-control" class='form-control' placeholder='Medida' id='ingredientes_medida' autocomplete='off'>
                        </div>
                        <button type="button" class="col-md-2 col-sm-2 col-xs-2 ingredientes-acrescentar">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                        </button>
                    </label>
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Imagem</label>
            @if(isset($receita->image))
                <img width="100" src="{!!asset('upload/receitas').'/'.$receita->image !!}">
            @endif
             <div class="fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-default btn-file"><span>Imagem</span>{!! Form::file('image')!!}</span>
                <span class="fileinput-filename"></span><span class="fileinput-new">nenhum arquivo</span>
            </div>
        </div>

        <div class="form-group" >
            <div class="row">
                <div class="col-sm-6 col-sx-12">
                    <label for="">Fonte</label>
                    {!! Form::text('fonte',isset($receita->fonte) ? $receita->fonte : '',array('class' => 'form-control','placeholder'=>'Fonte','id'=>'fonte','autocomplete'=>'off') )!!}
                </div>
                <div class="col-sm-6 col-sx-12">
                    <label for="">Parceiro</label>
                    {!! Form::text('parceiro',isset($receita->parceiro) ? $receita->parceiro : '',array('class' => 'form-control','placeholder'=>'Parceiro','id'=>'parceiro','autocomplete'=>'off') )!!}
                </div>
            </div>
        </div>

        <div class="form-group" >
            <div class="row">
                <div class="ranking col-md-4 mb-2">
                    Ranking DiBandeja
                    <div class="ranking-nota"></div>
                    <input type="hidden" name="ranking_dibandeja">
                </div>
                <div class="ranking col-md-4 mb-2">
                    Ranking Clientes
                    <div class="fornecedores-nota"></div>
                    <input type="hidden" name="ranking_clientes">
                </div>
                <div class="ranking col-md-4 mb-2">
                    Ranking Parceiros
                    <div class="fornecedores-nota"></div>
                    <input type="hidden" name="ranking_parceiros">
                </div>
            </div>
        </div>

        <div class="form-group" >
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                    <label for="">Custo aproximado</label>
                    {!! Form::text('custo',isset($receita->custo) ? $receita->custo : '',array('class' => 'form-control','placeholder'=>'R$...','id'=>'custo','autocomplete'=>'off') )!!}
                    <small>* Valores aproximados. Margem de erro R$x,00</small>
                </div>
            </div>
        </div>


       <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	{!! Form::close() !!}

@endsection
