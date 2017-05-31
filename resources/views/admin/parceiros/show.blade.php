@extends('admin.app')

@section('contentheader_title')
    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Parceiro: {{ $parceiro->nome }}
@endsection


@section('main-content')
    <div class="box">
		@if (isset($parceiro->receitas))
			<div class="box-body">
				<table id="datatables" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Receita</th>
							<th>Data da Receita</th>
							<th>Total Receitas</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($parceiro->receitas as $receita)
							<tr>
								<td>{{ $receita->titulo }}</td>
								<td>{{ date('d/m/Y', strtotime($receita->created_at)) }}</td>
								<td>{{ isset($receita->cardapios) ? $receita->cardapios->count() : 0 }}</td>
							</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
	                        <th>Parceiro</th>
							<th>Última Receita</th>
							<th>Total Receitas</th>
						</tr>
					</tfoot>
				</table>
			</div><!-- /.box-body -->
		@else
			Nenhuma receita vinculada ao parceiro.
		@endif
	</div><!-- /.box -->
@endsection
