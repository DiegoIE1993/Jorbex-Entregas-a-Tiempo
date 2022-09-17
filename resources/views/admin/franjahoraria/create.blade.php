@extends('adminlte::page')

@section('title', 'Nueva Franja Horaria')

@section('content_header')
    <h1>Franja Horaria</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{!! Form::open(['route'=>'admin.franjahoraria.store']) !!}

				<div class="form-group">
					{!! Form::label('descripcion', 'Descripción') !!}
					{!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Nombre Forma Franja Horaria']) !!}
					@error('descripcion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop
