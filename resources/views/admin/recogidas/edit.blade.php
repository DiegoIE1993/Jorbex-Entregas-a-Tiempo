@extends('adminlte::page')

@section('title', 'Editar Genero')

@section('content_header')
    <h1>Editar Genero {{$genero->descripcion}}</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{!! Form::model($genero,['route'=>['admin.generos.update',$genero], 'method'=>'put']) !!}


				<div class="form-group">
					{!! Form::label('descripcion', 'Descripcion') !!}
					{!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Nombre del Genero']) !!}
					@error('descripcion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Actualizar Genero', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop

