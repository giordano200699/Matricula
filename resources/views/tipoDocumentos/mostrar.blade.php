@extends('layouts.base')

@section('content')

	<div class="col-12"><h1>TIPO DE DOCUMENTOS</h1></div>

	<table class="table">
		<!--<caption>Mostrar Tipo de Documentos</caption> -->
		
		<thead class="table-dark">
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Descripción</th>
		      <th>Editar</th>
		      <th>Eliminar</th>
		    </tr>
	  	</thead>
	  	<tbody>
	  		@foreach($tipoDocumentos as $tipoDocumento)
	  		
	  			<tr>
			      <th scope="row">{{$tipoDocumento->id}}</th>
			      <td>{{$tipoDocumento->nombre}}</td>
			      <td>{{$tipoDocumento->descripcion}}</td>
			      <td><a href="{{url('admin/tipoDocumentos/editar/'.$tipoDocumento->id)}}"><button type="button" class="btn btn-dark">Editar</button></a></td>
			      <td><form action="{{url('admin/tipoDocumentos/eliminar')}}" method="POST">
	  			@csrf<input type="hidden" name="id" value="{{$tipoDocumento->id}}"><input type="submit" class="btn btn-dark" value="Eliminar"></form></td>
			    </tr>
	  		
	  		@endforeach
		</tbody>
	</table>

@endsection