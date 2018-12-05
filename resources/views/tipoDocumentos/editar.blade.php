@extends('layouts.base')

@section('content')

	<form action="{{url('admin/tipoDocumentos/editando/'.$tipoDocumento->id)}}" method="POST">
		@csrf
		<fieldset>
			<legend>Tipo de Documento</legend>
			<label>Nombre:</label>
			<input type="text" name="nombre" value="{{$tipoDocumento->nombre}}">
			<br/>
			<label>Descripción:</label>
			<textarea name="descripcion">{{$tipoDocumento->descripcion}}</textarea>
			<br/>
			<input type="submit" class="btn btn-success" value="Enviar Datos">
		</fieldset>
	</form>

@endsection