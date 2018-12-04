@extends('layouts.base')

@section('content')

	<form action="{{url('admin/alumnos/creando')}}" method="POST">
		@csrf
		<fieldset>
			<legend>Datos 1</legend>
			<label>Nombres:</label>
			<input type="text" name="nombres">
			<br/>
			<label>Apellido Paterno:</label>
			<input type="text" name="apePaterno">
			<br/>
			<label>Apellido Materno:</label>
			<input type="text" name="apeMaterno">
			<br/>
			<label>Correo:</label>
			<input type="email" name="correo">
			<br/>
			<input type="submit" value="Enviar Datos">
		</fieldset>
	</form>
	<p>Hola Mundo</p>

@endsection