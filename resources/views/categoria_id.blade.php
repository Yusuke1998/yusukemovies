@extends('templates.layout.template')
@section('contentI')
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<table class="table text-center" id="tabla">
					<thead style="background: darkgray;">
						<tr>
							<th class="h4">Pelicula</th>
							<th class="h4">Sinopsis</t>
							<th class="h4">Categoria</th>
						</tr>
					</thead>
					<tbody style="background: gray;">
					@foreach($peliculas as $pelicula)
						<tr>
							<td>
								<a class="h4 text-white" href="{{route('peliculas.id',$pelicula->id)}}">{{$pelicula->title}}</a>
							</td>
							<td>
								<a class="h5 text-white" href="{{route('peliculas.id',$pelicula->id)}}">{{$pelicula->sinopsis}}</a>
							</td>
							<td>
								<span class="h4 text-white">{{$pelicula->category->name}}</span>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>			
@endsection