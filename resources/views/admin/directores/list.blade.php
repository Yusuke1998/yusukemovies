@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
		<h1 class="text-center">Directores</h1>
		<a href="{{route('director.create')}}" class="pull-right" title="Nuevo director"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo</a>
		<table id="tabla" class="table table-hover">
			<thead>
				<tr>
					<th>Nombre(s)</th>
					<th>Apellido(s)</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($directores as $director)
				<tr>
					<td>{{$director->firstname}}</td>
					<td>{{$director->lastname}}</td>
					<td>
						<div class="btn-group">
							<form action="{{route('director.destroy',$director->id)}}" method="post">{!!csrf_field()!!}

								<a href="{{route('director.show',$director->id)}}" class="btn btn-info" title="Ver">Ver</a>

								<a href="{{route('director.edit',$director->id)}}" class="btn btn-warning" title="Editar">Editar</a>

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