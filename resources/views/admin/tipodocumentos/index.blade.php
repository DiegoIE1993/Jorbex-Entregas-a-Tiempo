@extends('adminlte::page')

@section('title', 'Lista Tipo Documentos')

@section('content_header')
    <h1>Tipo Documento</h1>
@stop

@section('content')
	<div class="card-header">
		<a href="{{route('admin.tipodocumentos.create')}}" class="btn btn-primary">Nuevo</a>
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
					@foreach ($documentos as $documento)
						<tr>
							<td>{{$documento->id}}</td>
							<td>{{$documento->descripcion}}</td>
							<td width="15px"><a href="{{route('admin.tipodocumentos.edit',$documento)}}" class="btn btn-primary btn-sm">Editar</a></td>
							<td width="15px">
								<form action="{{route('admin.tipodocumentos.destroy',$documento)}}" method="POST">
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