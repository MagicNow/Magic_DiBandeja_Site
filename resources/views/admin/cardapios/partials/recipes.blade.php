@if (isset($menus) && count($menus) > 0)
	@foreach ($menus as $receita => $menu)
		<div class="menu-table table-responsive">		
			<table class="table table-bordered">
				<caption class="menu-caption">{{ $receita }}</caption>
				<thead>
					<tr>
						<th width="300">Cliente</th>
						<th>Data</th>
						<th>Período (dias)</th>
						<th>Cardápios</th>
						<th>Frequência</th>
						<th>Ranking Cliente</th>
						<th>Ranking DiBandeja</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($menu as $item)
						<tr>
							<th scope="row">{{ $item->nome }}</th>
							<td>{{ $item->created_at }}</td>
							<td>{{ $item->periodo }}</td>
							<td>{{ $item->cardapios }}</td>
							<td>{{ $item->frequencia }}</td>
							<td>{{ $item->ranking_clientes }}</td>
							<td>{{ $item->ranking_dibandeja }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@endforeach
@else
	Não existem cardápios cadastrados.
@endif