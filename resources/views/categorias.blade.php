@extends('templates.layout.template')
@section('contentI')
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<table class="table text-center" id="tabla">
					<thead style="background: darkgray;">
						<tr>
							<th class="h4">Categoria</th>
							<th class="h4">Peliculas</t>
						</tr>
					</thead>
					<tbody style="background: gray;">
					@foreach($categorias as $categoria)
						<tr>
							<td>
								<a class="h4 text-white" href="{{route('categoria.id',$categoria->id)}}">{{$categoria->name}}</a>
							</td>
							<td>
								<a class="h3 text-white" href="{{route('categoria.id',$categoria->id)}}">{{count($categoria->movies)}}</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>			
@endsection