@extends('admin.app')

@section('contentheader_title')
    Cadastros de usuários no site
@endsection


@section('main-content')
    <div class="box">
		<div class="box-header"><a class="exportar" href="{!! URL::route('exportar')!!}">Exportar</a></div><!-- /.box-header -->
		<div class="box-body">	
			
			<table id="datatables" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>CPF</th>
						<th>Unidade</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{!! $user->name!!}</td>
							<td>{!! $user->email!!}</td>
							<td>{!! $user->document!!}</td>
			
							<td>{!! $user->unit!!}</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>CPF</th>
						<th>Unidade</th>
					</tr>
				</tfoot>
			</table>
			<?php echo $users->render(); ?>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
@endsection