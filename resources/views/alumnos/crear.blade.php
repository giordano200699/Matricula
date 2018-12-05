@extends('layouts.base')

@section('content')

	
		<form action="{{url('admin/alumnos/creando')}}" method="POST">
			@csrf
			<fieldset>
				<div class="form-group row">
					<legend>Crear Alumno</legend>
				</div>
				<div class="form-group row">
  					<label for="example-tel-input" class="col-sm col-form-label">Nombres:</label>
  					<div class="col-sm-13">
				    	<input class="form-control" type="tel" value="" id="example-tel-input">
				  	</div>
				</div>
				<div class="form-group row">
  					<label for="example-tel-input" class="col-sm col-form-label">Apellido Paterno:</label>
  					<div class="col-sm-13">
				    	<input class="form-control" type="tel" value="" id="example-tel-input">
				  	</div>
				</div>
				<div class="form-group row">
  					<label for="example-tel-input" class="col-sm col-form-label">Apellido Materno</label>
  					<div class="col-sm-13">
				    	<input class="form-control" type="tel" value="" id="example-tel-input">
				  	</div>
				</div>
				<div class="form-group row">
  					<label for="example-tel-input" class="col-sm col-form-label">Correo:</label>
  					<div class="col-sm-13">
				    	<input class="form-control" type="tel" value="" id="example-tel-input">
				  	</div>
				</div>
				<div class="form-group row">
					<input type="submit" class="btn btn-success" value="Enviar Datos">
				</div>
			</fieldset>
		</form>
	

		<!--<form action="{{url('admin/alumnos/creando')}}" method="POST">
			@csrf
			<fieldset>
				<legend>Crear Alumno</legend>
				<label>Nombres:</label>
				<input type="text" name="nombres">
				<br/>
				<label>Apellido Paterno:</label>
				<input type="text" name="apePaterno">
				<br/>
				<label>Apellido Materno:</label>
				<input type="text" name="apeMaterno">
				<br/>
				<label>Correo:</label>
				<input type="email" name="correo">
				<br/>
				<input type="submit" class="btn btn-success" value="Enviar Datos">
			</fieldset>
		</form>-->

@endsection