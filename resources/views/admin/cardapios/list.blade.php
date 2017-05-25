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
						<input type="text" name="search" class="menu-form-input form-control" placeholder="Busca" value="{{ app('request')->input('search') }}">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<button type="submit" class="btn col-md-5 btn-info">Buscar</button>
						<span class="col-md-2"></span>
						<a href="{{ route('admin.cardapios.busca', ['type' => app('request')->input('type')]) }}" class="btn col-md-5 btn-secondary">Ver todos os registros</a>
					</div>
				</div>
			</form>
			<br>
			<div class="row mt-3">
				<div class="col-md-4"></div>
				<div class="btn-group col-md-4" role="group">
					<a href="{{ route('admin.cardapios.busca', ['search' => app('request')->input('search'), 'type' => 'cardapios']) }}" class="col-md-4 menu-buttons-menu btn btn-secondary {{ app('request')->input('type') === 'cardapios' ? 'active' : NULL }}">Cardápios {{ app('request')->input('type') === 'cardapios' ? '(' . count($menus) . ')' : NULL }}</a>
					<a href="{{ route('admin.cardapios.busca', ['search' => app('request')->input('search'), 'type' => 'ingredientes']) }}" class="col-md-4 menu-buttons-ingredients btn btn-secondary {{ app('request')->input('type') === 'ingredientes' ? 'active' : NULL }}">Ingredientes</a>
					<a href="{{ route('admin.cardapios.busca', ['search' => app('request')->input('search'), 'type' => 'receitas']) }}" class="col-md-4 menu-buttons-recipe btn btn-secondary {{ app('request')->input('type') === 'receitas' ? 'active' : NULL }}">Receitas</a>
				</div>
			</div>
			<br>
			<?php
			switch (app('request')->input('type')) {
				case 'cardapios':
					?>
					@include('admin.cardapios.partials.menu')
					<?php
					break;
				case 'receitas':
					?>
					@include('admin.cardapios.partials.recipes')
					<?php
					break;
				case 'ingredientes':
					?>
					@include('admin.cardapios.partials.ingredients')
					<?php
					break;
			}
			?>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
@endsection