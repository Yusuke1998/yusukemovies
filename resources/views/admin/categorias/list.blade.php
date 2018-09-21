@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
		<h1 class="text-center">Categorias</h1>
		<a href="{{route('categoria.create')}}" class="pull-right" title="Nueva categoria"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo</a>
		<table id="tabla" class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categorias as $categoria)
				<tr>
					<td>{{$categoria->name}}</td>
					<td>{{$categoria->content}}</td>
					<td>
						<div class="btn-group">
							<form action="{{route('categoria.destroy',$categoria->id)}}" method="post">{!!csrf_field()!!}
								<a href="{{route('categoria.edit',$categoria->id)}}" class="btn btn-warning" title="Editar">Editar</a>

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