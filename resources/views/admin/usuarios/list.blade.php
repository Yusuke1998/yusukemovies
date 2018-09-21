@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
		<h1 class="text-center">Usuarios</h1>
		<a href="{{route('usuario.create')}}" class="pull-right" title="Nuevo usuario"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo</a>
		<table id="tabla" class="table table-hover">
			<thead>
				<tr>
					<th>Nombre(s)</th>
					<th>Correo</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($usuarios as $usuario)
				<tr>
					<td>{{$usuario->name}}</td>
					<td>{{$usuario->email}}</td>
					<td>
						<div class="btn-group">
							<form action="{{route('usuario.destroy',$usuario->id)}}" method="post">{!!csrf_field()!!}

								<a href="{{route('usuario.show',$usuario->id)}}" class="btn btn-info" title="Ver">Ver</a>

								<a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-warning" title="Editar">Editar</a>

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