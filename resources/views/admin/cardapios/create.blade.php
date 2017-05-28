@extends('admin.modal')

@section('contentheader_title')
	Novo cardápio
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
	
	<div class="menu-create-header">
		<strong>{{ $menu->cliente->nome }}</strong><br>
		Dados básicos do cliente
	</div>

	{!! Form::open(array('route' => array('admin.cardapios.store', isset($cardapio->id) ? $cardapio->id : ''), 'method' => 'POST', 'class' => 'menu-create-form')) !!}
		<div class="menu-create-slider">
			@for ($i = 1; $i <= $menu->periodo; $i++)
				<div class="section" id="section{{ $i }}">
					<div class="menu-create-table-container">
						<strong>Dia {{ $i }}</strong>
						@if ($i > 1)
							<button class="menu-create-buttons menu-create-button-prev" data-page="{{ $i - 1 }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Dia {{ $i - 1 }}</button>
						@endif
						<table cellspacing="10" cellpadding="0" border="0" class="menu-create-table">
							@foreach ($refeicoes as $refeicao)
								<tr>
									<td class="form-group">
										<label class="menu-create-label">{{ $refeicao->nome }}</label>
										<div class="col-md-12 row component-mt-select" data-mt-request-url="/admin/receitas/list" data-mt-max-tags="1" data-mt-tag-input-name="receita[{{$i}}]['receita']" data-mt-default-values='{{ isset($receitas[$i][$refeicao->id]->receita_refeicao) ? $receitas[$i][$refeicao->id]->receita_refeicao : '{}' }}'>
											<div class="col-md-12 row">
												<input type="text" class="form-control form-ingredientes-caracteristicas" data-mt-filter-control/>
											</div>
										</div>
									</td>
									<td class="form-group" valign="top">
										<label class="menu-create-label">Valor calórico</label>
										<input type="text" name="calorias[{{$i}}]['valor_calorico']" value="{{ isset($receitas[$i][$refeicao->id]->receita_refeicao) ? $receitas[$i][$refeicao->id]->calorias : '' }}" placeholder="Valor calórico" class="form-control">
									</td>
									<td class="form-group" valign="top">
										<label class="menu-create-label">Custo da receita</label>
										<input type="text" name="custo[{{$i}}]['custo']" value="{{ isset($receitas[$i][$refeicao->id]->receita_refeicao) ? $receitas[$i][$refeicao->id]->custo : '' }}" placeholder="Custo da Receita" class="form-control">
									</td>
									<td class="form-group" valign="top">
										<label class="menu-create-label">Propriedades nutricionais</label>
										<input type="text" name="propriedades[{{$i}}]['propriedades_nutricionais']" value="{{ isset($receitas[$i][$refeicao->id]->receita_refeicao) ? $receitas[$i][$refeicao->id]->propriedades_nutricionais : '' }}" placeholder="Propriedades Nutricionais" class="form-control">
									</td>
									<td class="form-group" valign="top">
										<label class="menu-create-label">Benefícios</label>
										<input type="text" name="beneficios[{{$i}}]['beneficios']" value="{{ isset($receitas[$i][$refeicao->id]->receita_refeicao) ? $receitas[$i][$refeicao->id]->beneficios : '' }}" placeholder="Benefícios" class="form-control">
									</td>
								</tr>
							@endforeach
						</table>
						@if ($i < $menu->periodo)
							<button class="menu-create-buttons menu-create-button-next" data-page="{{ $i + 1 }}">Dia {{ $i + 1 }} <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
						@endif
					</div>
				</div>
			@endfor
		</div>
	{!! Form::close() !!}
@endsection