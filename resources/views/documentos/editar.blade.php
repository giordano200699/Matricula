@extends('layouts.base')

@section('content')
	


	<div class="col-6">
		<form action="{{url('admin/documentos/editando')}}" method="POST" enctype="multipart/form-data" files="true">
			@csrf
			<fieldset>
				<legend>Crear Documento</legend>
				<input type="hidden" id="idDocumento" name="idDocumento" value="{{$documento->id}}">
				<input type="hidden" id="idAlumno" name="idAlumno" value="{{$alumno->id}}">

				<div class="form-group">
			    	<label for="codigo">Codigo:</label>
			    	<input type="text" class="form-control" name="codigo" value="{{$documento->codigo}}">
			 	</div>

			 	<div class="form-group">
			    	<label for="descripcion">Descripción:</label>
		   			<textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{$documento->descripcion}}</textarea>
			  	</div>
				
				<div class="form-group">
				    <label for="tipoDocumento">Tipo de Documento:</label>
				    <select class="form-control" id="tipoDocumento" name="tipoDocumento">
				     	@foreach($tiposDocumentos as $tipoDocumento)
							<option value="{{$tipoDocumento->id}}" @if($tipoDocumento->id == $documento->idTipoDocumento) selected @endif >{{$tipoDocumento->nombre}}</option>
						@endforeach
		   			</select>
			  	</div>
				
				<input type="submit" class="btn btn-success" value="Enviar Datos">
			</fieldset>

			

		</form>
	</div>
	

@endsection