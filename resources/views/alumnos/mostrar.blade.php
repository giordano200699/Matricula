@extends('layouts.base')

@section('content')
	<div class="col-12"><h1>LISTA DE ALUMNOS</h1></div>
	
	<div class="col-12">
		<table>
			<!--<caption>Mostrar Alumnos</caption>-->
			<colgroup>
				
			</colgroup>
			<thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nombres</th>
			      <th scope="col">ApePaterno</th>
			      <th scope="col">ApeMaterno</th>
			      <th scope="col">Correo</th>
			      <th>Editar</th>
			      <th>Eliminar</th>
			      <th>Visualizar</th>
			    </tr>
		  	</thead>
		  	<tbody>
		  		@foreach($alumnos as $alumno)
		  		
		  			<tr>
				      <th scope="row">{{$alumno->id}}</th>
				      <td>{{$alumno->nombres}}</td>
				      <td>{{$alumno->apePaterno}}</td>
				      <td>{{$alumno->apeMaterno}}</td>
				      <td>{{$alumno->correo}}</td>
				      <td><a href="{{url('admin/alumnos/editar/'.$alumno->id)}}">Editar</a></td>
				      <td><form action="{{url('admin/alumnos/eliminar')}}" method="POST">
		  			@csrf<input type="hidden" name="id" value="{{$alumno->id}}"><input type="submit" value="Eliminar"></form></td>
		  			<td><a href="{{url('admin/alumnos/visualizar/'.$alumno->id)}}">Visualizar</a></td>
				    </tr>
		  		
		  		@endforeach
			</tbody>
		</table>
	</div>

	

@endsection