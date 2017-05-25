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
					{{-- <th>Ranking Cliente</th>
					<th>Ranking DiBandeja</th> --}}
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