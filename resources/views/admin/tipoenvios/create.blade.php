@extends('adminlte::page')

@section('title', 'Nuevo Tipo de Envió')

@section('content_header')
    <h1>Tipo de Envió</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{!! Form::open(['route'=>'admin.tipoenvios.store']) !!}

				<div class="form-group">
					{!! Form::label('descripcion', 'Descripción') !!}
					{!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Nombre Tipo de Envió']) !!}
					@error('descripcion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop
