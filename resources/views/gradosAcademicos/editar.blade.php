@extends('layouts.app')

@section('content')

	<form action="{{url('admin/gradosAcademicos/editando/'.$gradoAcademico->id)}}" method="POST">
		@csrf
		<fieldset>
			<legend>Tipo de Documento</legend>
			<label>Nombre:</label>
			<input type="text" name="nombre" value="{{$gradoAcademico->nombre}}">
			<br/>
			<label>Descripción:</label>
			<textarea name="descripcion">{{$gradoAcademico->descripcion}}</textarea>
			<br/>
			<input type="submit" value="Enviar Datos">
		</fieldset>
	</form>

@endsection