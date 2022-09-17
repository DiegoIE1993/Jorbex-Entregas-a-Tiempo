@extends('adminlte::page')

@section('title', 'Nuevo Genero')

@section('content_header')
    <h1>Nuevo Genero</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{!! Form::open(['route'=>'admin.generos.store']) !!}

				<div class="form-group">
					{!! Form::label('descripcion', 'Descripcion') !!}
					{!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Nombre del genero']) !!}
					@error('descripcion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Guardar Genero', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop
