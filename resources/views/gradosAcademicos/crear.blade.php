@extends('layouts.base')

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
			<input type="submit" class="btn btn-success" value="Enviar Datos">
		</fieldset>
	</form>

@endsection