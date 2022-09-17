@extends('adminlte::page')

@section('title', 'Editar Cargo')

@section('content_header')
    <h1>Editar Tipo Dirección {{$tipodireccione->descripcion}}</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">

			{!! Form::model($tipodireccione,['route'=>['admin.tipodirecciones.update',$tipodireccione], 'method'=>'put']) !!}
				<div class="form-group">
					{!! Form::label('descripcion', 'Descripcion') !!}
					{!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Nombre tipo Dirección']) !!}
					@error('descripcion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop

