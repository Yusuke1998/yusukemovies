@extends('templates.layout.template')
@section('asideI')
			<!-- aside -->
				<div class="col-md-2 pull-left">
				  <!-- Left column -->
				  <p>Las 4 más nuevas</p>  
				  @foreach($peliculas4 as $pelicula4)
				    <a href="{{route('peliculas.id',$pelicula4->id)}}" title="{{$pelicula4->title}}">	
					  <div class="panel text-black">
					  	<div class="panel-title">
					  		<span>{{$pelicula4->title}}</span>
					  	</div>
					  		@foreach($pelicula4->posters as $poster)
								<img src="/poster/{{$poster->name}}" class="img-thumbnail" alt="{{$pelicula4->title}}">
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
						<div class="col-md-12 search">
							<form action="" method="get" accept-charset="utf-8">
								<div class="col-md-6 input-group pull-right">
				                	<input type="text" name="search" placeholder="Titulo de pelicula" class="form-control">
				                	<div class="input-group-btn">
				                  		<button type="submit" class="btn btn-info">Buscar</button>
				                	</div>
			            		</div>
							</form>
						</div>
						<div class="col-md-12 slider">
							<p class="h4">Ultimos estrenos</p>
							@foreach($peliculas8 as $pelicula)	<!-- -- -->
							<div class="col-md-3">
								<a href="{{route('peliculas.id',$pelicula->id)}}" title="{{$pelicula->title}}">	
									<div class="panel poster">
										<div class="panel-title text-white">
											<p class="small">{{$pelicula->created_at->diffForHumans()}}</p>
										</div>
										<div class="panel-body">
						  					@foreach($pelicula->posters as $poster)
						  					<img src="/poster/{{$poster->name}}" class="img-thumbnail" alt="{{$pelicula->title}}">
						  					@endforeach
										</div>
										<div class="panel-footer">
											<p>{{$pelicula->title}}</p>
										</div>
									</div>
								</a>
							</div>
							@endforeach<!-- -- -->
						</div>
						<div class="col-md-12 ">
							<div class="row list-all">
							<p class="h4">Disponibles</p>
								@foreach($peliculas as $pelicula)
								<div class="col-md-2">
									<a href="{{route('peliculas.id',$pelicula->id)}}" title="{{$pelicula->title}}">
										@foreach($pelicula->posters as $poster)
						  				<img src="/poster/{{$poster->name}}" class="img-thumbnail" alt="{{$pelicula->title}}">
						  				@endforeach
									</a>
								</div>
								@endforeach
								<a style="color:white;" class="btn pull-right" href="{{route('peliculas')}}" title="">Ver más...</a>
							</div>
						</div>
						<!-- -- -->

					</div>
				</div>
				<!-- content -->
@endsection
@section('asideII')
				<!-- aside -->
				<div class="col-md-2 pull-right">
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
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<p class="h4 text-white">Top 10 mejores peliculas</p>
							<div class="panel text-black">
						  		<div class="panel-title">
							  		<span class="pull-left">Titulo</span>
							  		<span class="badge pull-right">1 pts</span>
							  	</div>
							  	<div class="panel-body">
						  			<img src="{{asset('/img/wolf.jpg')}}" class="img-thumbnail" alt="">
							  	</div>
							  	<div class="panel-footer">
							  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							  	</div>
					  		</div>
						</div>
					<!-- -------------- -->
						<div class="col-md-6">
							<p class="h4 text-white">Top 10 peores peliculas</p>
							<div class="panel text-black">
						  		<div class="panel-title">
							  		<span class="pull-left">Titulo</span>
							  		<span class="badge pull-right">1 pts</span>
							  	</div>
							  	<div class="panel-body">
						  			<img src="{{asset('/img/wolf.jpg')}}" class="img-thumbnail" alt="">
							  	</div>
							  	<div class="panel-footer">
							  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							  	</div>
					  		</div>
						</div>
					</div>
				</div>
@endsection