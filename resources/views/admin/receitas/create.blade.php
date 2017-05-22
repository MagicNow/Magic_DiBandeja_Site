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

        <div class="form-group form-providers">
            <label for="ingredientes">Ingredientes</label>
            @if (isset($receita->ingredientes) && count($receita->ingredientes) > 0)
                @foreach ($receita->ingredientes as $key => $ingrediente)
                    <div class="ingredientes-linha row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="row">
                                        <div class="col-sm-2 col-xs-12">
                                            {!! Form::input('text', 'ingredientes_quantidade[]', isset($ingrediente->pivot->quantidade) ? $ingrediente->pivot->quantidade : '', array('class' => 'form-control', 'placeholder'=>'Qtd', 'autocomplete'=>'off') )!!}
                                        </div>
                                        <div class="col-sm-2 col-xs-12">
                                            {!! Form::select('ingredientes_medida[]', $unidades, isset($ingrediente->pivot->medida->id) ? $ingrediente->pivot->medida->id : '',array('class' => 'form-control')) !!}
                                        </div>
                                        <div class="col-sm-6 col-xs-12 component-mt-select" data-mt-request-url="/admin/ingredientes/list?type=modal" data-mt-max-tags="1" data-mt-tag-input-name="ingredientes" data-mt-default-values='{"{{ $ingrediente->id }}":"{{ $ingrediente->nome }}"}'>
                                            <input type="text" class="form-control" data-mt-filter-control/>
                                        </div>
                                    </div>
                                </div>
                                @if ($key === 0)
                                    <button type="button" class="ingredientes-acrescentar">
                                        <span class="glyphicon glyphicon-plus-sign"></span>
                                    </button>
                                @else
                                    <button type="button" class="ingredientes-remover">
                                        <span class="glyphicon glyphicon-minus-sign"></span>
                                    </button>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="ingredientes-linha row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-11">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-12">
                                        <input type="text" name="ingredientes_quantidade[]" class="form-control col-sm-12" placeholder='Qtd' autocomplete='off'>
                                    </div>
                                    <div class="col-sm-2 col-xs-12">
                                        {!! Form::select('ingredientes_medida[]', $unidades, '',array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="col-sm-6 col-xs-12 component-mt-select" data-mt-request-url="/admin/ingredientes/list?type=modal" data-mt-max-tags="1" data-mt-tag-input-name="ingredientes" >
                                        <input type="text" class="form-control" data-mt-filter-control/>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="ingredientes-acrescentar">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                            </button>
                        </div>
                    </div>
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
                    <div class="row">
                        @if (isset($receita->fontes_id))
                            <div class="col-sm-6 col-xs-12 component-mt-select" data-mt-request-url="/admin/fontes/list?type=modal" data-mt-max-tags="1" data-mt-tag-input-name="fontes_id" data-mt-default-values='{"{{ $receita->fontes_id }}":"{{ isset($receita->fontes->nome) ? $receita->fontes->nome : '' }}"}'>
                                <input type="text" class="form-control" data-mt-filter-control/>
                            </div>
                        @else
                            <div class="col-sm-6 col-xs-12 component-mt-select" data-mt-request-url="/admin/fontes/list?type=modal" data-mt-max-tags="1" data-mt-tag-input-name="fontes_id">
                                <input type="text" class="form-control" data-mt-filter-control/>
                            </div>
                        @endif
                    </div>
                    {{-- {!! Form::text('fonte',isset($receita->fonte) ? $receita->fonte : '',array('class' => 'form-control','placeholder'=>'Fonte','id'=>'fonte','autocomplete'=>'off') )!!} --}}
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
                    <input type="hidden" name="ranking_dibandeja" value="{{ isset($receita->ranking_dibandeja) ? $receita->ranking_dibandeja : 0 }}">
                </div>
                <div class="ranking col-md-4 mb-2">
                    Ranking Clientes
                    <div class="ranking-nota"></div>
                    <input type="hidden" name="ranking_clientes" value="{{ isset($receita->ranking_clientes) ? $receita->ranking_clientes : 0 }}">
                </div>
                <div class="ranking col-md-4 mb-2">
                    Ranking Parceiros
                    <div class="ranking-nota"></div>
                    <input type="hidden" name="ranking_parceiros" value="{{ isset($receita->ranking_parceiros) ? $receita->ranking_parceiros : 0 }}">
                </div>
            </div>
        </div>
        <hr>
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
