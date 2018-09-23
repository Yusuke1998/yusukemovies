@extends('templates.layout.template')
@section('contentI')
	<div class="content">
		<div class="row">
			<p class="text-center h3">Todas las peliculas disponibles</p><hr>
			@foreach($peliculas as $pelicula)
			<a style="color: white;" href="{{route('peliculas.id',$pelicula->id)}}" title="{{$pelicula->title.': '.$pelicula->sinopsis}}">
				<div class="col-md-2 col-lg-2 col-xs-4">
					@foreach($pelicula->posters as $poster)
						<img class="img-thumbnail" style="width: 200px; height: 200px;" src="/poster/{{$poster->name}}" data-holder-rendered="true" alt="{{$pelicula->title}}"><hr>
					@endforeach
				</div>
			</a>
			@endforeach
		</div>
	</div>
@endsection