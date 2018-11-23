@extends('layouts.app')

@section('content')

	<form action="{{url('admin/gradosAcademicos/creando')}}" method="POST">
		@csrf
		<fieldset>
			<legend>Crear Grado Académico</legend>
			<label>Nombre:</label>
			<input type="text" name="nombre">
			<br/>
			<label>Descripción:</label>
			<input type="text" name="descripcion">
			<br/>
			<input type="submit" value="Enviar Datos">
		</fieldset>
	</form>
	<p>Hola Mundo</p>

@endsection