@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
		<h1 class="text-center">Todos los Actores</h1>
		<a href="{{route('actor.create')}}" class="pull-right" title="Nuevo actor"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo</a>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre(s)</th>
					<th>Apellido(s)</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($actores as $actor)
				<tr>
					<td>{{$actor->firstname}}</td>
					<td>{{$actor->lastname}}</td>
					<td>
						<div class="btn-group">
							<form action="{{route('actor.destroy',$actor->id)}}" method="post">{!!csrf_field()!!}

								<a href="{{route('actor.show',$actor->id)}}" class="btn btn-info" title="Ver">Ver</a>

								<a href="{{route('actor.edit',$actor->id)}}" class="btn btn-warning" title="Editar">Editar</a>

								<input type="hidden" value="DELETE" name="_method">
								<input class="btn btn-danger" type="submit" title="Eliminar" value="Eliminar">
							</form>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $actores->render() !!}
		</div>
@endsection