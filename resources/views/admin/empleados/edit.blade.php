@extends('adminlte::page')

@section('title', 'Editar Genero')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{!! Form::model($empleado,['route'=>['admin.empleados.update',$empleado], 'method'=>'put']) !!}

				<div class="form-group">
					{!! Form::label('Genero:') !!}
					{!! Form::select('genero_id', $generos, $empleado->genero_id, ['class'=>'form-control', 'placeholder'=>'Seleccione Genero']) !!}
					@error('genero_id')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>


				<div class="form-group">
					{!! Form::label('nombres', 'Nombres:') !!}
					{!! Form::text('nombres', null, ['class'=>'form-control', 'placeholder'=>'Nombres']) !!}
					@error('nombres')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>

				<div class="form-group">
					{!! Form::label('apellidos', 'Apellidos:') !!}
					{!! Form::text('apellidos', null, ['class'=>'form-control', 'placeholder'=>'Apellidos']) !!}
					@error('apellidos')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>

				<div class="form-group">
					{!! Form::label('Tipo Documento:') !!}
					{!! Form::select('tipo_documento_id', $tipoDocumento, $empleado->tipo_documento_id, ['class'=>'form-control', 'placeholder'=>'Seleccione Tipo Documento']) !!}
					@error('tipo_documento_id')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>

				<div class="form-group">
					{!! Form::label('identificacion', 'Numero Documento:') !!}
					{!! Form::text('identificacion', null, ['class'=>'form-control', 'placeholder'=>'Numero Documento']) !!}
					@error('identificacion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>

				<div class="form-group">
					{!! Form::label('Tipo Direccion:') !!}
					{!! Form::select('tipo_direccion_id', $tipoDireccion, $empleado->tipo_direccion_id, ['class'=>'form-control', 'placeholder'=>'Seleccione Tipo Direccion']) !!}
					@error('tipo_direccion_id')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>

				<div class="form-group">
					{!! Form::label('direccion', 'Direccion:') !!}
					{!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Direccion']) !!}
					@error('direccion')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>

				<div class="form-group">
					{!! Form::label('telefono', 'Telefono:') !!}
					{!! Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
					@error('telefono')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>

				<div class="form-group">
					{!! Form::label('correo', 'Correo:') !!}
					{!! Form::text('correo', null, ['class'=>'form-control', 'placeholder'=>'Correo Electronico']) !!}
					@error('correo')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>

				<div class="form-group">
					{!! Form::label('Cargo:') !!}
					{!! Form::select('cargo_id', $cargos, $empleado->cargo_id, ['class'=>'form-control', 'placeholder'=>'Seleccione Cargo']) !!}
					@error('cargo_id')
						<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>

	</div>
@stop