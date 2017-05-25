<div class="row mt-3">
	<div class="col-md-4"></div>
	<div class="btn-group col-md-4" role="group">
		<a href="{{ route('admin.cardapios.busca', ['search' => app('request')->input('search'), 'type' => app('request')->input('type'), 'status' => 'solicitados']) }}" class="col-md-6 btn btn-info {{ app('request')->input('status') === 'solicitados' ? 'active' : NULL }}">Solicitados</a>
		<a href="{{ route('admin.cardapios.busca', ['search' => app('request')->input('search'), 'type' => app('request')->input('type'), 'status' => 'elaborados']) }}" class="col-md-6 btn btn-info {{ app('request')->input('status') === 'elaborados' ? 'active' : NULL }}">Elaborados</a>
	</div>
</div>
<br>
<div class="menu-table table-responsive">
	@if (isset($menus) && count($menus) > 0)
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Cliente</th>
					<th>Data</th>
					<th>Período (dias)</th>
					<th>Cardápios</th>
					<th>Frequência</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($menus as $menu)
					<tr>
						<th scope="row">{{ $menu->cliente->nome }}</th>
						<td>{{ date_format($menu->created_at, 'd/m/Y') }}</td>
						<td>{{ $menu->periodo }}</td>
						<td>{{ $menu->cardapios }}</td>
						<td>{{ $menu->frequencia }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		Não existem cardápios cadastrados.
	@endif
</div>