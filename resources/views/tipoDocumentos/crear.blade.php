@extends('layouts.app')

@section('content')

	<form action="{{url('admin/tipoDocumentos/creando')}}" method="POST">
		@csrf
		<fieldset>
			<legend>Tipo de Documento</legend>
			<label>Nombre:</label>
			<input type="text" name="nombre">
			<br/>
			<label>Descripción:</label>
			<textarea name="descripcion"></textarea>
			<br/>
			<input type="submit" value="Enviar Datos">
		</fieldset>
	</form>
	<p>Hola Mundo</p>

@endsection