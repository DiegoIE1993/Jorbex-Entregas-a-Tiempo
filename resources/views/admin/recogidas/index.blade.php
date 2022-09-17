@extends('adminlte::page')

@section('title', 'Lista de Generos')

@section('content_header')
    <h1>Generos</h1>
@stop

@section('content')
	<div class="card-header">
		<a href="{{route('admin.generos.create')}}" class="btn btn-primary">Nuevo Genero</a>
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
					@foreach ($generos as $genero)
						<tr>
							<td>{{$genero->id}}</td>
							<td>{{$genero->descripcion}}</td>
							<td width="15px"><a href="{{route('admin.generos.edit',$genero)}}" class="btn btn-primary btn-sm">Editar</a></td>
							<td width="15px">
								<form action="{{route('admin.generos.destroy',$genero)}}" method="POST">
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