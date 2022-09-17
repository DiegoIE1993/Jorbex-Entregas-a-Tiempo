@extends('adminlte::page')

@section('title', 'Editar Documento')

@section('content_header')
    <h1>Editar Documento {{$tipodocumento->descripcion}}</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">


			{!! Form::model($tipodocumento,['route'=>['admin.tipodocumentos.update',$tipodocumento], 'method'=>'PUT']) !!}
				<div class="form-group">
					{!! Form::label('descripcion', 'Descripcion') !!}
					{!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Nombre Tipo Documento']) !!}
					@error('descripcion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Actualizar Documento', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop
