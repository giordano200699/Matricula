@extends('layouts.base')

@section('content')
	
	

	<form action="{{url('admin/alumnos/editando/'.$alumno->id)}}" method="POST">
		@csrf
		<fieldset>
			<div class="form-group row">
				<legend>Alumno: {{$alumno->nombres}} {{$alumno->apePaterno}} {{$alumno->apeMaterno}}</legend>
			</div>
			<div class="form-group row">
					<label for="example-tel-input" class="col-sm col-form-label">Nombres:</label>
					<div class="col-sm-13">
			    	<input class="form-control" type="tel" value="{{$alumno->nombres}}" id="example-tel-input">
			  	</div>
			</div>
			<div class="form-group row">
					<label for="example-tel-input" class="col-sm col-form-label">Apellido Paterno:</label>
					<div class="col-sm-13">
			    	<input class="form-control" type="tel" value="{{$alumno->apePaterno}}" id="example-tel-input">
			  	</div>
			</div>
			<div class="form-group row">
					<label for="example-tel-input" class="col-sm col-form-label">Apellido Materno</label>
					<div class="col-sm-13">
			    	<input class="form-control" type="tel" value="{{$alumno->apeMaterno}}" id="example-tel-input">
			  	</div>
			</div>
			<div class="form-group row">
					<label for="example-tel-input" class="col-sm col-form-label">Correo:</label>
					<div class="col-sm-13">
			    	<input class="form-control" type="tel" value="{{$alumno->correo}}" id="example-tel-input">
			  	</div>
			</div>
			<div class="form-group row">
				<input type="submit" class="btn btn-success" value="Enviar Datos">
			</div>
		</fieldset>
	</form>

@endsection