@extends('layouts.base')

@section('content')

	
	
		<form action="{{url('admin/gradosAcademicos/creando')}}" method="POST">
			@csrf
			<fieldset>
				<div class="form-group row">
					<legend>Crear Grado Académico</legend>
				</div>
				<div class="form-group row">
					<label for="example1" class="col-sm col-form-label">Nombre:</label>
					<div class="col-sm-13">
				    	<input class="form-control"  id="example1">
				  	</div>
				</div>
				<div class="form-group row">
					<label for="example2" class="col-sm col-form-label">Descripcion:</label>
					<div class="col-sm-13">
				    	<input class="form-control"  id="example2">
				  	</div>
				</div>
				<div class="form-group row">
					<input type="submit" class="btn btn-success" value="Enviar Datos">
				</div>
			</fieldset>
		</form>
	

@endsection