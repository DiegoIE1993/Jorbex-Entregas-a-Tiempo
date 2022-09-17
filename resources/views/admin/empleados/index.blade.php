@extends('adminlte::page')

@section('title', 'Lista de Empleados')

@section('content_header')
    <h1>Empleados</h1>
@stop

@section('content')
	<div class="card-header">
		<a href="{{route('admin.empleados.create')}}" class="btn btn-primary">Nuevo</a>
	</div>
	<div class="card">
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>GENERO</th>
						<th>NOMBRES</th>
						<th>APELLIDOS</th>
						<th>TIPO DOCUMENTO</th>
						<th>DOCUMENTO</th>
						<th>TIPO DIRECCIÓN</th>
						<th>DIRECCIÓN</th>
						<th>TELEFONO</th>
						<th>CORREO</th>
						<th>CARGO</th>

						<th colspan="2">ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($empleados as $empleado)
						<tr>
							<td>{{$empleado->id}}</td>
							<td>{{$empleado->genero->descripcion}}</td>
							<td>{{$empleado->nombres}}</td>
							<td>{{$empleado->apellidos}}</td>
							<td>{{$empleado->tipoDocumento->descripcion}}</td>
							<td>{{$empleado->identificacion}}</td>
							<td>{{$empleado->tipoDireccion->descripcion}}</td>
							<td>{{$empleado->direccion}}</td>
							<td>{{$empleado->telefono}}</td>
							<td>{{$empleado->correo}}</td>
							<td>{{$empleado->cargo->descripcion}}</td>

							<td width="15px"><a href="{{route('admin.empleados.edit',$empleado)}}" class="	btn btn-primary btn-sm">Editar</a>
							</td>
							<td width="15px">
								<form action="{{route('admin.empleados.destroy',$empleado)}}" method="POST">
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