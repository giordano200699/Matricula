@extends('layouts.base')

@section('content')
	<div class="col-5">
		<form action="{{url('admin/gradosAcademicos/editando/'.$gradoAcademico->id)}}" method="POST">
			@csrf
			<fieldset>
				
					<legend>Editar Grado</legend>
				
				<div class="form-group ">
					<label for="example1" class="col-sm col-form-label">Nombres:</label>
						<div class="col-sm-13">
				    	<input class="form-control" value="{{$gradoAcademico->nombre}}" id="example1" name="nombre">
				  	</div>
				</div>
				<div class="form-group ">
					<label for="example2" class="col-sm col-form-label">Descripción:</label>
					
				   		<textarea class="form-control " id="example2" name="descripcion" rows="3">{{$gradoAcademico->descripcion}}</textarea>
				   	
				</div>

				<!--<div class="form-group row">
						<label for="example2" class="col-sm col-form-label">Descripción:</label>
					<div class="col-sm-13">
				    	<input name="descripcion" class="form-control" value="{{$gradoAcademico->descripcion}}" id="example2">
				  	</div>
				</div>-->
				
				<input type="submit" class="btn btn-success" value="Enviar Datos">
			</fieldset>
		</form>
	</div>
@endsection