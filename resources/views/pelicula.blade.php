@extends('templates.layout.template')
@section('contentI')
@include('templates.layout.info')
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
			<div class="panel-body text-center">
				@foreach($pelicula->posters as $poster)
					<img src="/poster/{{$poster->name}}" class="img-thumbnail" alt="poster">
				@endforeach
			</div>
			<div class="panel-body">
				<span class="label label-info">Descripcion:</span><br><p class="h4">{{$pelicula->content}}</p>
			</div>
			<div class="panel-footer">
				<p class="h5"><a href="{{route('pelicula.index')}}" title="Lista de peliculas">Volver a la lista.</a></p>
			</div>
		</div>
	@guest
		<p class="h4">Debes <a href="{{route('login')}}">Iniciar sesion</a> para poder comentar</p>
	@endguest
	</div>
	<div class="col-md-12">
		@foreach($pelicula->commentaries as $comentario)
		<div style="color:blue; font-size:15px; padding: 10px; background: white; width: 100%;">
			<p class="label label-primary">{{$comentario->user->name}}</p>
			<p class="h4">{{$comentario->content.' '}}</p>
			<small>{{$comentario->created_at->diffForHumans()}}</small>
		</div>
		@endforeach
	</div>

	@if(Auth::user())
	<div class="col-md-12">
		<form action="{{route('comentario',['user'=>Auth::user()->id, 'movie'=>$pelicula->id])}}" method="post">
			{!!csrf_field()!!}
			<div class="panel">
				<div class="form-group">
					<textarea name="content" class="form-control" placeholder="Escribe tu comentario..."></textarea>

					<input type="submit" class="form-control btn btn-info" value="Enviar" name="submit">
				</div>
			</div>
		</form>
	</div>
	@endif
</div>
@endsection