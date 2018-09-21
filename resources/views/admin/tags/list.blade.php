@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
		<h1 class="text-center">Tags</h1>
		<a href="{{route('tag.create')}}" class="pull-right" title="Nuevo tag"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo</a>
		<table id="tabla" class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tags as $tag)
				<tr>
					<td>{{$tag->name}}</td>
					<td>{{$tag->content}}</td>
					<td>
						<div class="btn-group">
							<form action="{{route('tag.destroy',$tag->id)}}" method="post">{!!csrf_field()!!}
								<a href="{{route('tag.edit',$tag->id)}}" class="btn btn-warning" title="Editar">Editar</a>

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