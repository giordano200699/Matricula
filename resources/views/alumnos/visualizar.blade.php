@extends('layouts.base')

@section('content')


<div class="container portfolio">
	
	<div class="bio-info">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="bio-image">
							<img src="{{asset('imgUsuarios/'.$alumno->imgUrl)}}" alt="image" width="200" height="200" />
							<br>
							<br>
	
						</div>			
					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="bio-content">
				<p><strong>Nombres: {{$alumno->nombres}} </strong></p>
	   			 <p >Apellidos: {{$alumno->apePaterno}} </p>
					<p>Codigo: {{$alumno->id}}</p>
					<p>Estado: <font color="green"> Disponible</font> </p> 
					<p>Correo: {{$alumno->correo}} </p>
				</div>
			</div>
		</div>	
	</div>
</div>
	<div id="searchbar" style="margin-top: 0px; margin-bottom: 0px;">
			<form action="" autocomplete="on">
				<input id="search" name="search" type="text" onkeyup="myFunction()"  placeholder="Realiza tu búsqueda"><input id="search_submit" value="Rechercher" type="submit">
			</form>
	</div>
	<div class="col-12">
		<a class="nav-link" href="{{url('admin/documentos/crear/').'/'.$alumno->id}}"><button type="button" class="btn btn-dark">Crear Documento</button></a>
	</div>
<div class="col-12">
	<div class="col-12">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			@foreach($gradosAcademicos as $gradoAcademico)
				@if($gradoAcademico->id == $gradosAcademicos[0]->id)
				<li class="nav-item">
				   <a class="nav-link active" id="pills-a{{$gradoAcademico->id}}-tab" data-toggle="pill" href="#pills-a{{$gradoAcademico->id}}" role="tab" aria-controls="barra{{$gradoAcademico->id}}" aria-selected="false">{{$gradoAcademico->nombre}}</a>
				</li>
				@else
				<li class="nav-item">
				   <a class="nav-link" id="pills-a{{$gradoAcademico->id}}-tab" data-toggle="pill" href="#pills-a{{$gradoAcademico->id}}" role="tab" aria-controls="barra{{$gradoAcademico->id}}" aria-selected="false">{{$gradoAcademico->nombre}}</a>
				</li>
				@endif
			@endforeach
		</ul>
		
		<div class="tab-content" id="pills-tabContent">
			@foreach($gradosAcademicos as $gradoAcademico)
					<div class="tab-pane fade @if($gradoAcademico->id == $gradosAcademicos[0]->id) show active @endif " id="pills-a{{$gradoAcademico->id}}" role="tabpanel" aria-labelledby="pills-a{{$gradoAcademico->id}}-tab" style="background-color: white;">
						<div class="row">
						@foreach($matriz[($gradoAcademico->id)] as $documento)
						<div class="col-4">
						<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="{{asset('imgPublications/'.$documento->imgUrl)}}" alt="Card image cap" width="200" height="300">
						  <div class="card-body" style="text-align: center;">
							<h5 class="card-title">{{$documento->tipoDocumento->nombre}}</h5>
							<h6>{{$documento->codigo}} </h6>
						    <a href="{{url('admin/documentos/visualizar/').'/'.$documento->id}}" class="btn btn-primary">Visualizar</a>
						  </div>
						</div>
						</div>
						@endforeach
						</div>
					</div>	
			@endforeach
		  
		</div>

	</div>
	
</div>

@endsection