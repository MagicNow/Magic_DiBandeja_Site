@extends('admin.app')

@section('contentheader_title')
    Cardápios
@endsection


@section('main-content')
    <div class="box">
		<div class="box-body">
			<form action="{{ route('admin.cardapios.busca') }}" class="menu-form row" method="get">
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="input-group col-md-4">
						<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
						<input type="text" name="search" class="menu-form-input form-control" placeholder="Busca">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<button type="submit" class="btn col-md-5 btn-success">Buscar</button>
						<span class="col-md-2"></span>
						<a href="{{ route('admin.cardapios.busca', ['type' => app('request')->input('type')]) }}" class="btn col-md-5 btn-secondary">Ver todos os registros</a>
					</div>
				</div>
			</form>
			<br>
			<div class="row mt-3">
				<div class="col-md-4"></div>
				<div class="btn-group col-md-4" role="group">
					<a href="{{ route('admin.cardapios.busca', ['search' => app('request')->input('search'), 'type' => 'cardapios']) }}" class="col-md-4 menu-buttons-menu btn btn-secondary {{ app('request')->input('type') === 'cardapios' ? 'active' : NULL }}">Cardápios</a>
					<a href="{{ route('admin.cardapios.busca', ['search' => app('request')->input('search'), 'type' => 'ingredientes']) }}" class="col-md-4 menu-buttons-ingredients btn btn-secondary {{ app('request')->input('type') === 'ingredientes' ? 'active' : NULL }}">Ingredientes</a>
					<a href="{{ route('admin.cardapios.busca', ['search' => app('request')->input('search'), 'type' => 'receitas']) }}" class="col-md-4 menu-buttons-recipe btn btn-secondary {{ app('request')->input('type') === 'receitas' ? 'active' : NULL }}">Receitas</a>
				</div>
			</div>
			<br>
			<div class="menu-table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Cliente</th>
							<th>Data</th>
							<th>Período (dias)</th>
							<th>Cardápios</th>
							<th>Frequência</th>
							<th>Ranking Cliente</th>
							<th>Ranking DiBandeja</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@if (isset($menus) && count($menus) > 0)
								@foreach ($menus as $menu)
									{{-- {{ dd($menu) }} --}}
									<th scope="row">1</th>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>@mdo</td>
									<td>@mdo</td>
								@endforeach
							@endif
						</tr>
					</tbody>
				</table>
			</div>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
@endsection