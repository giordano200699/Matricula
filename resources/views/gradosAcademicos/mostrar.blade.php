@extends('layouts.app')

@section('content')

	<h1>HOLA MUNDO</h1>

	<table>
		<caption>Mostrar Grados Académicos</caption>
		<colgroup>
			
		</colgroup>
		<thead>
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
			      <td><a href="{{url('admin/gradosAcademicos/editar/'.$gradoAcademico->id)}}">Editar</a></td>
			      <td><form action="{{url('admin/gradosAcademicos/eliminar')}}" method="POST">
	  			@csrf<input type="hidden" name="id" value="{{$gradoAcademico->id}}"><input type="submit" value="Eliminar"></form></td>
			    </tr>
	  		
	  		@endforeach
		</tbody>
	</table>

@endsection