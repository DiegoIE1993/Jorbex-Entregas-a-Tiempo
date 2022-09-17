@extends('adminlte::page')

@section('title', 'Editar Cargo')

@section('content_header')
    <h1>Editar Cargo {{$cargo->descripcion}}</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<form action="{{route(admin.cargos.update, $cargo->id)}}" method="post">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label for="descripcion">Descripción</label>
					<input type="text" name="descripcion" class="form-control" value="{{cargo->descripcion}}">
				</div>
				<div class="justify-content-end">
					<input type="submit" value="Guardar" class="btn btn-primary">
				</div>
			</form>
			{!! Form::model($cargo,['route'=>['admin.cargos.update',$cargo], 'method'=>'put']) !!}

				<div class="form-group">
					{!! Form::label('descripcion', 'Descripcion') !!}
					{!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Nombre del Cargo']) !!}
					@error('descripcion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Actualizar Cargo', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop

