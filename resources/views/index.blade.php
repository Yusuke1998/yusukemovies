@extends('templates.layout.template')
@section('asideI')
			<!-- aside -->
				<div class="col-md-2 hidden-sm hidden-xs pull-left">
				  <p>Las 4 más nuevas</p>  
				  @foreach($peliculas4 as $pelicula4)
				    <a href="{{route('peliculas.id',$pelicula4->id)}}" title="{{$pelicula4->title}}">	
					  <div class="panel text-black">
					  	<div class="panel-title">
					  		<span>{{$pelicula4->title}}</span>
					  	</div>
					  		@foreach($pelicula4->posters as $poster)
								<img class="img-thumbnail" style="width: 200px; height: 200px;" src="/poster/{{$poster->name}}" data-holder-rendered="true">
							@endforeach
					  </div>
					</a>
				  @endforeach
				</div>
			<!-- aisde -->
@endsection
@section('contentI')
				<!-- content -->
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12 col-lg-12 hidden-xs hidden-sm search">
							<form action="" method="get" accept-charset="utf-8">
								<div class="col-md-6 input-group pull-right">
				                	<input type="text" name="search" placeholder="Titulo de pelicula" class="form-control">
				                	<div class="input-group-btn">
				                  		<button type="submit" class="btn btn-info">Buscar</button>
				                	</div>
			            		</div>
							</form>
						</div>
						<div class="col-md-12 col-lg-12 col-sm-6">
							<p class="h4">Ultimos estrenos</p>
							@foreach($peliculas8 as $pelicula)
							<div class="col-md-3 col-xs-6 col-sm-4">
								<a href="{{route('peliculas.id',$pelicula->id)}}" title="{{$pelicula->title}}">	
									<div class="panel">
										<div class="panel-title  text-black">{{$pelicula->created_at->diffForHumans()}}
										</div>
					  					@foreach($pelicula->posters as $poster)
					  					<center><img class="img-thumbnail" style="width: 150px; height: 200px;" src="/poster/{{$poster->name}}" data-holder-rendered="true"></center>
					  					@endforeach
									</div>
								</a>
							</div>
							@endforeach<!-- -- -->
						</div>
						<div class="hidden-xs hidden-sm col-md-12 ol-lg-12 ">
							<div class="row list-all">
							<p class="h4">Disponibles</p>
								@foreach($peliculas as $pelicula)
								<div class="col-md-2">
									<a href="{{route('peliculas.id',$pelicula->id)}}" title="{{$pelicula->title}}">
										@foreach($pelicula->posters as $poster)
						  				<img class="img-thumbnail" style="width: 100px; height: 100px;" src="/poster/{{$poster->name}}" data-holder-rendered="true"><hr>
						  				@endforeach
									</a>
								</div>
								@endforeach
							</div>
								<a style="color:white;" class="btn pull-right" href="{{route('peliculas')}}" title="">Ver más...</a>
						</div>
						<!-- -- -->

					</div>
				</div>
				<!-- content -->
@endsection
@section('asideII')
				<!-- aside -->
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12 pull-right ">
				  <!-- Right column -->
					<form action="{{route('categoriayaño')}}" method="get" accept-charset="utf-8">
					  	<div class="panel">
						  <a class="badge text-center" href="#"><strong>Categorias</strong></a>   	
						  <select class="select" name="categories">
						  @foreach($categorias as $categoria)	
						  	<option value="{{$categoria->id}}">{{$categoria->name}}</option>
						  @endforeach
						  </select>
					  	</div>
					  	<div class="panel">
						  <a class="badge text-center" href="#"><strong>Año</strong></a> 
						  <select class="select" name="years">
						  @foreach($años as $año)	
						  	<option value="{{$año->id}}">{{$año->year}}</option>
						  @endforeach
						  </select>
					  	</div>
						<button type="submit" class="form-control">Buscar</button>
					</form>
					<hr>
					<div class="text-black">
						<ul class="list-group">
							@foreach($categorias as $categoria)
							<li class="list-group-item">
								<a class="small" href="{{route('categoria.id',$categoria->id)}}" title="">
									<span class="">{{$categoria->name}}</span>
								</a>
								<a class="small" href="" title="">
									<span class="badge">{{count($categoria->movies)}}</span>
								</a>
							</li>
							@endforeach
						</ul>	
					</div>  
				</div>
				<!-- aisde -->
@endsection
@section('contentII')
				<div class="col-md-12 col-lg-12">
					<div class="row">

					</div>
				</div>
@endsection