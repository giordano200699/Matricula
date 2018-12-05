@extends('layouts.base')

@section('content')
	


	<div class="col-6">
		<form action="{{url('admin/documentos/creando')}}" method="POST" enctype="multipart/form-data" files="true">
			@csrf
			<fieldset>
				<legend>Crear Documento</legend>
				<input type="hidden" id="idAlumno" name="idAlumno" value="{{$alumno->id}}">

			 	<div class="form-group row">
						<label for="example1" class="col-sm col-form-label">Código:</label>
						<div class="col-sm-12">
					    	<input class="form-control"  id="example1" name="codigo">
					  	</div>
					</div>

			 	<div class="form-group">
			    	<label for="descripcion">Descripción:</label>
		   			<textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
			  	</div>
				
				<div class="form-group">
				    <label for="tipoDocumento">Tipo de Documento:</label>
				    <select class="form-control" id="tipoDocumento" name="tipoDocumento">
				     	@foreach($tiposDocumentos as $tipoDocumento)
							<option value="{{$tipoDocumento->id}}">{{$tipoDocumento->nombre}}</option>
						@endforeach
		   			</select>
			  	</div>

			  	<div class="form-group">
				   <label for="archivo">Imagen:</label>
				   <div class="btn btn-default btn-file">
						<i class="fa fa-paperclip"></i> Seleccionar archivo <input
							type="file" name="urlImg" id="archivo" class="form-control"
							onchange="funcion()">
					</div>
					<span class=" inline">Max. 32MB</span>
				</div>

				
				<input type="submit" value="Enviar Datos">
			</fieldset>

			

		</form>
	</div>
	

@endsection