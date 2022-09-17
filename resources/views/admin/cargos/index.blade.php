@extends('adminlte::page')

@section('title', 'Lista de cargos')

@section('content_header')
    <h1>Cargos</h1>
@stop

@section('content')
	<div class="card-header">
		<a href="{{route('admin.cargos.create')}}" class="btn btn-primary">Nuevo Cargo</a>
	</div>
	<div class="card">
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>DESCRIPCION</th>
						<th colspan="2">ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($cargos as $cargo)
						<tr>
							<td>{{$cargo->id}}</td>
							<td>{{$cargo->descripcion}}</td>
							<td width="15px"><a href="{{route('admin.cargos.edit',$cargo)}}" class="btn btn-primary btn-sm">Editar</a></td>
							<td width="15px">
								<form action="{{route('admin.cargos.destroy',$cargo)}}" method="POST">
									@method('delete')
									@csrf
									<input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop