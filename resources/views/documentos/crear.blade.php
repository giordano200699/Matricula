@extends('layouts.app')

@section('content')

	<form action="{{url('admin/documentos/creando')}}" method="POST" enctype="multipart/form-data" files="true">
		@csrf
		<fieldset>
			<legend>Tipo de Documento</legend>
			<label>Nombre:</label>
			<input type="text" name="nombre">
			<br/>
			<label>Descripción:</label>
			<textarea name="descripcion"></textarea>
			<br/>
			<div class="form-group">
			<label for="archivo" class="control-label col-md-2">Imagen:</label>
			<div class="col-md-10">
				<div class="btn btn-default btn-file">
					<i class="fa fa-paperclip"></i> Seleccionar archivo <input
						type="file" name="urlImg" id="archivo" class="form-control"
						onchange="funcion()">
				</div>
				<span class=" inline">Max. 32MB</span>
			</div>
			</div>
			<br/>
			<input type="submit" value="Enviar Datos">
		</fieldset>

		

	</form>

	

@endsection