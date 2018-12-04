@extends('layouts.base')

@section('content')
	
		<div class="col-6">
			<form action="{{url('admin/tipoDocumentos/creando')}}" method="POST">
				@csrf
				<fieldset>
					<legend>Tipo de Documento</legend>
					<div class="form-group">
				    	<label for=nombre>Nombre:</label>
				    	<input type="text" class="form-control" name="nombre">
				 	</div>
					<div class="form-group">
					    <label for="idGradoAcademico">Grado Académico:</label>
					    <select class="form-control" id="gradoAcademico" name="idGradoAcademico">
					     	@foreach($gradosAcademicos as $gradoAcademico)
								<option value="{{$gradoAcademico->id}}">{{$gradoAcademico->nombre}}</option>
							@endforeach
			   			</select>
				  	</div>
					<div class="form-group">
				    	<label for="descripcion">Descripción:</label>
			   			<textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
				  	</div>
				  	<div class="form-group" style="text-align: center;">
						<input class="btn btn-success" type="submit" value="Enviar Datos">
					</div>
				</fieldset>
			</form>
		</div>


	

@endsection