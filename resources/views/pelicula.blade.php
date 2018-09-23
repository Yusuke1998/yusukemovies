@extends('templates.layout.template')
@section('contentI')
<div class="row">
	<div class="col-md-12">
		<div class="panel" style="background: #535888; color: white; padding: 10px;">
			<div class="panel-title">
				<p class="h5 pull-left">{{$pelicula->title}}</p>
			</div>
			<div class="panel-title">
				<p class="h5 pull-right">Publicado por: {{$pelicula->user->name}}</p>
			</div>
			<div class="panel-body">
				<center>Sinopsis:<br><p class="h5">{{$pelicula->sinopsis}}</p></center>
			</div>
			<div class="panel-body">
				
				<p class="h5 text-center">Titulo: {{$pelicula->title}}</p>
				
				<p class="h5 text-center">Categoria: {{$pelicula->category->name}}</p>

				<p class="h5 text-center">Año: {{$pelicula->year->year}}</p>

				<p class="h5 text-center">Director: {{$pelicula->director->firstname}}&nbsp{{$pelicula->director->lastname}}</p>

				<p class="h5 text-center">Actor(es):
				@foreach($pelicula->actors as $actor)
					{{$actor->firstname.' '.$actor->lastname}}.<br>
				@endforeach
				</p>
			</div>
			<div class="panel-body">
				<span class="label label-info">Descripcion:</span><br><p class="h4">{{$pelicula->content}}</p>
			</div>
			<div class="panel-body text-center">
				@foreach($pelicula->posters as $poster)
					<img src="/poster/{{$poster->name}}" class="img-thumbnail" alt="poster">
				@endforeach
			</div>
			<div class="panel-footer">
				<p class="h5"><a href="{{route('pelicula.index')}}" title="Lista de peliculas">Volver a la lista.</a></p>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<form action="" method="post">
			{!!csrf_field()!!}
			<input type="text" name="">
		</form>
	</div>
</div>
@endsection