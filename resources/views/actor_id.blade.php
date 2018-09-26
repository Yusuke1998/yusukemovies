@extends('templates.layout.template')
@section('contentI')
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-body">
					<p class="h3 text-black">{{$actor->firstname.' '.$actor->lastname}}</p>
					<p class="h5 text-black">{{$actor->biography}}</p>
				</div>
				<table class="table text-center" id="tabla">
					<thead style="background: darkgray;">
						<tr>
							<th class="h4">Pelicula</th>
							<th class="h4">Categoria</th>
							<th class="h4">Sinopsis</th>
							<th class="h4">Año</th>
						</tr>
					</thead>
					<tbody style="background: gray;">
					@foreach($peliculas as $pelicula)
						<tr>
							<td>
								<a class="h5 text-white" href="{{route('peliculas.id',$pelicula->id)}}">{{$pelicula->title}}</a>
							</td>
							<td>
								<a class="h5 text-white" href="{{route('categoria.id',$pelicula->category->id)}}">{{$pelicula->category->name}}</a>
							</td>
							<td>
								<span class="h5 text-white" href="">{{$pelicula->sinopsis}}</span>
							</td>
							<td>
								<span class="h5 text-white" href="">{{$pelicula->year->year}}</span>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>			
@endsection