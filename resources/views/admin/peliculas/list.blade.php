@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
		<h1 class="text-center">Peliculas</h1>
		<a href="{{route('pelicula.create')}}" class="pull-right" title="Nueva pelicula"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo</a>
		<table id="tabla" class="table table-hover">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Categoria</th>
					<th>Año</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($peliculas as $pelicula)
				<tr>
					<td>{{$pelicula->title}}</td>
					<td>{{$pelicula->category->name}}</td>
					<td>{{$pelicula->year->year}}</td>
					<td>
						<div class="btn-group">
							<form action="{{route('pelicula.destroy',$pelicula->id)}}" method="post">{!!csrf_field()!!}

								<a href="{{route('pelicula.show',$pelicula->id)}}" class="btn btn-info" title="Ver">Ver</a>

								<a href="{{route('pelicula.edit',$pelicula->id)}}" class="btn btn-warning" title="Editar">Editar</a>

								<input type="hidden" value="DELETE" name="_method">
								<input class="btn btn-danger" type="submit" title="Eliminar" value="Eliminar">
							</form>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
@endsection