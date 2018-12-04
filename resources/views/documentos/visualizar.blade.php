@extends('layouts.base')

@section('content')
	

<div class="col-3"><a class="btn btn-success" href="{{url('admin/alumnos/visualizar/').'/'.$documento->alumno->id}}">Volver Atrás</a></div>
	<div class="col-6">

			<img  src="{{asset('imgPublications/'.$documento->imgUrl)}}" class="img-fluid" alt="Responsive image">
			<div style="text-align: center; margin-top: 20px;">
				<a class="btn btn-success" href="{{url('admin/documentos/editar/'.$documento->id)}}" style="margin-right: 50px;">Editar Datos</a>
				<form class="inline" action="{{url('admin/documentos/eliminar')}}" method="POST">
		  			@csrf<input type="hidden" name="id" value="{{$documento->id}}"><input class="btn btn-danger" type="submit" value="Eliminar Documento"></form>
			</div>
			
	</div>
	

@endsection