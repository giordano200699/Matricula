@extends('layouts.base')

@section('content')
	
		<div class="col-6">
			<form action="{{url('admin/tipoDocumentos/creando')}}" method="POST">
				@csrf
				<fieldset>
					<legend>Crear tipo de Documento</legend>
					<div class="form-group row">
						<label for="example1" class="col-sm col-form-label">Nombre:</label>
						<div class="col-sm-10">
					    	<input class="form-control"  id="example1" name="nombre">
					  	</div>
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