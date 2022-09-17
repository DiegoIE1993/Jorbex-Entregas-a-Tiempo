@extends('adminlte::page')

@section('title', 'Nuevo Cargo')

@section('content_header')
    <h1>Nuevo Cargo</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<form action="{{route('admin.cargos.store')}}" method="post" novalidate>
				<div class="form-group">
					<label for="">Descripción</label>
					<input type="text" name="" class="form-control" placeholder="Descripción">
				</div>

				<div class="justify-content-end">
					<input type="submit" value="Guardar" class="btn btn-success">
				</div>
			</form>
		</div>

	</div>
@stop

