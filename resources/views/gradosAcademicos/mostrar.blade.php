@extends('layouts.base')

@section('content')
	
	<div class="col-12"><h1>GRADOS ACADÉMICOS</h1></div>

	<table class="table">
		<!--<caption>Mostrar Grados Académicos</caption>-->
		<colgroup>
			
		</colgroup>
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
	  		@foreach($gradosAcademicos as $gradoAcademico)
	  		
	  			<tr>
			      <th scope="row">{{$gradoAcademico->id}}</th>
			      <td>{{$gradoAcademico->nombre}}</td>
			      <td>{{$gradoAcademico->descripcion}}</td>
			      <td><a href="{{url('admin/gradosAcademicos/editar/'.$gradoAcademico->id)}}"><button type="button" class="btn btn-dark">Editar</button></a></td>
			      <td><form action="{{url('admin/gradosAcademicos/eliminar')}}" method="POST">
	  			@csrf<input type="hidden" name="id" value="{{$gradoAcademico->id}}"><input type="submit" value="Eliminar"></form></td>
			    </tr>
	  		
	  		@endforeach
		</tbody>
	</table>

@endsection