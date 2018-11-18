@extends('layouts.app')

@section('content')

	<form action="{{url('admin/alumnos/editando/'.$alumno->id)}}" method="POST">
		@csrf
		<fieldset>
			<legend>Datos 1</legend>
			<label>Nombres:</label>
			<input type="text" name="nombres" value="{{$alumno->nombres}}">
			<br/>
			<label>Apellido Paterno:</label>
			<input type="text" name="apePaterno" value="{{$alumno->apePaterno}}">
			<br/>
			<label>Apellido Materno:</label>
			<input type="text" name="apeMaterno" value="{{$alumno->apeMaterno}}">
			<br/>
			<label>Correo:</label>
			<input type="email" name="correo"  value="{{$alumno->correo}}">
			<br/>
			<input type="submit" value="Enviar Datos">
		</fieldset>
	</form>

@endsection