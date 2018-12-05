@extends('layouts.base')

@section('content')

	
		<form action="{{url('admin/alumnos/creando')}}" method="POST" enctype="multipart/form-data" files="true">
			@csrf
			<fieldset>
				<div class="form-group row">
					<legend>Crear Alumno</legend>
				</div>
				<div class="form-group row">
  					<label for="example1" class="col-sm col-form-label">Nombres:</label>
  					<div class="col-sm-13">

				    	<input class="form-control"  id="example1" name="nombres">

				  	</div>
				</div>
				<div class="form-group row">
  					<label for="example2" class="col-sm col-form-label">Apellido Paterno:</label>
  					<div class="col-sm-13">

				    	<input class="form-control"  id="example2" name="apePaterno">

				  	</div>
				</div>
				<div class="form-group row">
  					<label for="example3" class="col-sm col-form-label">Apellido Materno</label>
  					<div class="col-sm-13">

				    	<input class="form-control" type="tel" value="" id="example-tel-input" name="apeMaterno">

				  	</div>
				</div>
				<div class="form-group row">
  					<label for="example4" class="col-sm col-form-label">Correo:</label>
  					<div class="col-sm-13">

				    	<input class="form-control"  id="example4" name="correo">

				  	</div>
				</div>
				<div class="form-group row">
				   <label for="archivo" class="col-sm col-form-label">Imagen:</label>
				   <div class="btn btn-default btn-file">
						<i class="fa fa-paperclip"></i> Seleccionar archivo <input
							type="file" name="urlImg" id="archivo" class="form-control"
							onchange="funcion()">
					</div>
					<span class=" inline">Max. 32MB</span>
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