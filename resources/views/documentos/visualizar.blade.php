@extends('layouts.base')

@section('content')
	

<div class="col-3"><a class="btn btn-success" href="{{url('admin/alumnos/visualizar/').'/'.$documento->alumno->id}}">Volver Atrás</a></div>
	
	
<div class="col-6" style="margin-top: 6rem;">
		<a href=" @if($documento->imgUrl!=null) {{asset('imgPublications/'.$documento->imgUrl)}} else {{asset('imgPublications/'.$documento->imgUrl2)}} @endif " target="_blank"> <img  src=" @if($documento->imgUrl!=null) {{asset('imgPublications/'.$documento->imgUrl)}} @else {{asset('imgPublications/'.$documento->imgUrl2)}} @endif " class="img-fluid" alt="Responsive image" style="padding: 0rem;
		 width: 600px; height: 300px;	border-radius: 10%;		"></a>
			<div style="text-align: center; margin-top: 40px;">
				<a class="btn btn-success" href="{{url('admin/documentos/editar/'.$documento->id)}}"
				 style="margin-right: 90px; margin-top: 30px;">Editar Datos</a>

				<form class="inline" action="{{url('admin/documentos/eliminar')}}" method="POST">
		  			@csrf<input type="hidden" name="id" value="{{$documento->id}}"><input class="btn btn-danger" type="submit" value="Eliminar Documento" style=" margin-top: 30px;"></form>
			</div>
			
</div>
	

@endsection