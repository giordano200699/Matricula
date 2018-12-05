@extends('layouts.base')

@section('content')
	<div class="col-5">
		<form action="{{url('admin/tipoDocumentos/editando/'.$tipoDocumento->id)}}" method="POST">
			@csrf
			<fieldset>
				
				<legend>Editar Tipo de documento: {{$tipoDocumento->nombre}}</legend>
				
				<div class="form-group row">
						<label for="example1" class="col-sm col-form-label">Nombre:</label>
						<div class="col-sm-10">
					    	<input class="form-control"  id="example1" name="nombre" value="{{$tipoDocumento->nombre}}">
					  	</div>
					</div>
				<div class="form-group">
				    <label for="idGradoAcademico">Grado Académico:</label>
				    <select class="form-control" id="gradoAcademico" name="idGradoAcademico">
				     	@foreach($gradosAcademicos as $gradoAcademico)
							<option value="{{$gradoAcademico->id}}" @if($gradoAcademico->id==$tipoDocumento->idGradoAcademico) selected @endif >{{$gradoAcademico->nombre}}</option>
						@endforeach
		   			</select>
			  	</div>

				<div class="form-group">
			    	<label for="descripcion">Descripción:</label>
		   			<textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{$tipoDocumento->descripcion}}</textarea>
			  	</div>

				<input type="submit" class="btn btn-success" value="Enviar Datos">
			</fieldset>
		</form>
	</div>
	<!--<form action="{{url('admin/tipoDocumentos/editando/'.$tipoDocumento->id)}}" method="POST">
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
	</form>-->

@endsection