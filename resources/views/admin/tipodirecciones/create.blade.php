@extends('adminlte::page')

@section('title', 'Nuevo Tipo Dirección')

@section('content_header')
    <h1>Tipo Dirección</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{!! Form::open(['route'=>'admin.tipodirecciones.store']) !!}

				<div class="form-group">
					{!! Form::label('descripcion', 'Descripcion') !!}
					{!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Nombre Tipo Dirección']) !!}
					@error('descripcion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop

