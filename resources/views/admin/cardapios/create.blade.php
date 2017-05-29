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
						<div class="form-inline menu-create-table-header">
							<div class="form-group">
								<strong>Dia {{ $i }}</strong>
							</div>
							<div class="form-group">
								{!! Form::select('receita[' . $i . ']["dia_semana"]', $diasSemana, NULL, array('class' => 'form-control')) !!}
							</div>
							<div class="form-group">
								<label class="control-label">Valor calórico total</label>
								{!! Form::input('text', 'receitas[' . $i . ']["valor_calorico_total"]', isset($receitas[$i]["valor_calorico_total"]) ? $receitas[$i]["valor_calorico_total"] : 0, array('class' => 'form-control', 'disabled' => 'disabled')) !!}
							</div>
							<div class="form-group">
								<label class="control-label">Custo total</label>
								{!! Form::input('text', 'receitas[' . $i . ']["custo_total"]', isset($receitas[$i]["custo_total"]) ? 'R$' . money_format('%i', $receitas[$i]["custo_total"]) : 0, array('class' => 'form-control', 'disabled' => 'disabled')) !!}
							</div>
						</div>
						@if ($i > 1)
							<button class="menu-create-buttons menu-create-button-prev" data-page="{{ $i - 1 }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Dia {{ $i - 1 }}</button>
						@endif
						<table cellspacing="10" cellpadding="0" border="0" class="menu-create-table">
							@foreach ($refeicoes as $refeicao)
								<tr class="menu-create-table-line">
									<td class="form-group">
										<label class="menu-create-label">{{ $refeicao->nome }}</label>
										<div class="col-md-12 row component-mt-select" data-mt-request-url="/admin/receitas/list" data-mt-max-tags="1" data-mt-tag-input-name="receita[{{$i}}]['receita']" data-mt-default-values='{{ isset($receitas[$i][$refeicao->id]->receita_refeicao) ? $receitas[$i][$refeicao->id]->receita_refeicao : '{}' }}' data-mt-trigger-on-add="completeRecipeInfo">
											<div class="col-md-12 row">
												<input type="text" class="form-control form-create-form-recipe" data-mt-filter-control/>
											</div>
										</div>
									</td>
									<td class="form-group" valign="top">
										<label class="menu-create-label">Valor calórico</label>
										<input type="text" name="receita[{{$i}}]['valor_calorico']" placeholder="Valor calórico" class="form-control form-create-form-cal" readonly="readonly">
									</td>
									<td class="form-group" valign="top">
										<label class="menu-create-label">Custo da receita</label>
										<input type="text" name="receita[{{$i}}]['custo']" placeholder="Custo da Receita" class="form-control form-create-form-cost" readonly="readonly">
									</td>
									<td class="form-group" valign="top">
										<label class="menu-create-label">Propriedades nutricionais</label>
										<input type="text" name="receita[{{$i}}]['propriedades_nutricionais']" placeholder="Propriedades Nutricionais" class="form-control form-create-form-nutritional" readonly="readonly">
									</td>
									<td class="form-group" valign="top">
										<label class="menu-create-label">Benefícios</label>
										<input type="text" name="receita[{{$i}}]['beneficios']" placeholder="Benefícios" class="form-control form-create-form-benefits" readonly="readonly">
									</td>
								</tr>
							@endforeach
						</table>
						@if ($i < $menu->periodo)
							<button class="menu-create-buttons menu-create-button-next" data-page="{{ $i + 1 }}">Dia {{ $i + 1 }} <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
						@endif
					</div>

					<nav class="navbar navbar-default menu-create-footer">
						<div class="container-fluid menu-create-footer-buttons">
							<div class="navbar-header pull-right">
								<a class="btn btn-info" href="{{ route('admin.cardapios.store') }}">Visualizar</a>
								<a class="btn btn-success" href="{{ route('admin.cardapios.store') }}">Salvar</a>
							</div>
						</div>
					</nav>
				</div>
			@endfor
		</div>
	{!! Form::close() !!}
@endsection