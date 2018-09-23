@extends('templates.layout.template')
@section('contentI')
	<div class="content">
		<div class="row">
			<p class="text-center h3">Todas las peliculas disponibles</p>
			@foreach($peliculas as $pelicula)
			<a style="color: white;" href="{{route('peliculas.id',$pelicula->id)}}" title="{{$pelicula->sinopsis}}">
				<div class="col-md-2 col-lg-2 col-xs-4">
					<p class="h4 text-center">{{$pelicula->title}}</p>
					@foreach($pelicula->posters as $poster)
						<img src="/poster/{{$poster->name}}" class="img-responsive" alt="">
					@endforeach
				</div>
			</a>
			@endforeach
		</div>
	</div>
@endsection