@extends('layouts.base')

@section('content')
	<div class="col-5">
		<form action="{{url('admin/tipoDocumentos/editando/'.$tipoDocumento->id)}}" method="POST">
			@csrf
			<fieldset>
				
				<legend>Editar Tipo de documento: {{$tipoDocumento->nombre}}</legend>
				
				<div class="form-group ">
					<label for="example1" class="col-sm col-form-label">Nombre:</label>
						<div class="col-sm-13">
				    	<input class="form-control" value="{{$tipoDocumento->nombre}}" id="example1">
				  	</div>
				</div>
				<div class="form-group ">
					<label for="example2" class="col-sm col-form-label">Descripción:</label>
					
				   		<textarea class="form-control " id="example2" name="descripcion" rows="3">{{$tipoDocumento->descripcion}}</textarea>
				   	
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