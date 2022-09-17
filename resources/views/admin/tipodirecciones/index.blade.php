@extends('adminlte::page')

@section('title', 'Lista Tipo Dirección')

@section('content_header')
    <h1>Tipo Dirección</h1>
@stop

@section('content')
	<div class="card-header">
		<a href="{{route('admin.tipodirecciones.create')}}" class="btn btn-primary">Nuevo</a>
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

					@foreach ($direcciones as $direccion)
						<tr>
							<td>{{$direccion->id}}</td>
							<td>{{$direccion->descripcion}}</td>
							<td width="15px"><a href="{{route('admin.tipodirecciones.edit',$direccion)}}" class="btn btn-primary btn-sm">Editar</a></td>
							<td width="15px">
								<form action="{{route('admin.tipodirecciones.destroy',$direccion)}}" method="POST">
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