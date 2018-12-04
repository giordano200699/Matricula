@extends('layouts.base')

@section('content')
	<div class="col-6">
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
						<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="{{asset('imgPublications/39de9b272b9bc0b2fa22bb27588b4ed62648e598_hq.jpg')}}" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Documento</h5>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
					</div>	
			@endforeach
		  
		</div>

	</div>

@endsection