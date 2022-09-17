@extends('adminlte::page')

@section('title', 'Nueva Forma Pago')

@section('content_header')
    <h1>Forma de Pago</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{!! Form::open(['route'=>'admin.formapagos.store']) !!}

				<div class="form-group">
					{!! Form::label('descripcion', 'Descripción') !!}
					{!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Nombre Forma de Pago']) !!}
					@error('descripcion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop
