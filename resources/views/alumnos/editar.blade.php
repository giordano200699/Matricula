@extends('layouts.base')

@section('content')
	
	

	<form action="{{url('admin/alumnos/editando/'.$alumno->id)}}" method="POST">
		@csrf
		<fieldset>
			<div class="form-group row">
				<legend>Alumno: {{$alumno->nombres}} {{$alumno->apePaterno}} {{$alumno->apeMaterno}}</legend>
			</div>
			<div class="form-group row">
				<label for="example1" class="col-sm col-form-label">Nombres:</label>
				<div class="col-sm-13">
			    	<input class="form-control" value="{{$alumno->nombres}}" id="example1" name="nombres">
			  	</div>
			</div>
			<div class="form-group row">
				<label for="example2" class="col-sm col-form-label">Apellido Paterno:</label>
				<div class="col-sm-13">
			    	<input class="form-control" value="{{$alumno->apePaterno}}" id="2" name="apePaterno">
			  	</div>
			</div>
			<div class="form-group row">
				<label for="example3" class="col-sm col-form-label">Apellido Materno</label>
				<div class="col-sm-13">
			    	<input class="form-control" value="{{$alumno->apeMaterno}}" id="example3" name="apeMaterno">
			  	</div>
			</div>
			<div class="form-group row">
				<label for="example4" class="col-sm col-form-label">Correo:</label>
				<div class="col-sm-13">
			    	<input class="form-control" value="{{$alumno->correo}}" id="example4" name="correo">
			  	</div>
			</div>
			<div class="form-group row">
				<input type="submit" class="btn btn-success" value="Enviar Datos">
			</div>
		</fieldset>
	</form>

@endsection