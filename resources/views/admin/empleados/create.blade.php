@extends('adminlte::page')

@section('title', 'Nuevo Empleado')

@section('content_header')
    <h1>Nuevo</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<form action="">
				<div class="form-group">
					<label for="nombre">Nombres:</label>
					<input type="text" id="nombre" placeholder="Nombres" required="true">
				</div>
				<div class="form-group">
					<label for="apellido">Apellidos:</label>
					<input type="text" id="apellido" placeholder="Apellidos" required="true">
				</div>
				<div class="form-group">
					<label for="tipo_documento">Tipo Documento:</label>
					<select name="tipo_documento" id="tipo_documento" class="form-control">
						@foreach ()
							<option value=""></option>
						endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="identificacion">Identificacion:</label>
					<input type="number" id="identificacion" placeholder="Documento identidad" required="true">
				</div>
				<div class="form-group">
					<label for="direccion">Dirección:</label>
					<input type="text" id="direccion" placeholder="Dirección de residencia" required="true">
				</div>
				<div class="form-group">
					<label for="telefono">Telefono:</label>
					<input type="number" id="telefono" placeholder="Numero de contacto" required="true">
				</div>
				<div class="form-group">
					<label for="email">Telefono:</label>
					<input type="email" id="email" placeholder="Correo electrónico " required="true">
				</div>
			</form>
		</div>

	</div>
@stop
