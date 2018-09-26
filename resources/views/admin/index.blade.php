@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')

	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="info-box bg-red">
			  <span class="info-box-icon">{{count($peliculas)}}<i class="fa fa-comments-o"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">Peliculas</span>
			    <!-- The progress section is optional -->
			    <div class="progress">
			      <div class="progress-bar" style="width: 70%"></div>
			    </div>
			    <span class="progress-description">
			      <a style="color:white;" href="{{route('pelicula.index')}}" title="Lista">Ir a la lista.</a>
			    </span>
			  </div><!-- /.info-box-content -->
			</div><!-- /.info-box -->
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="info-box bg-yellow">
			  <span class="info-box-icon">{{count($categorias)}}<i class="fa fa-comments-o"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">Categorias</span>
			    <!-- The progress section is optional -->
			    <div class="progress">
			      <div class="progress-bar" style="width: 70%"></div>
			    </div>
			    <span class="progress-description">
			      <a style="color:white;" href="{{route('categoria.index')}}" title="Lista">Ir a la lista.</a>
			    </span>
			  </div><!-- /.info-box-content -->
			</div><!-- /.info-box -->
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="info-box bg-blue">
			  <span class="info-box-icon">{{count($actores)}}<i class="fa fa-comments-o"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">Actores</span>
			    <!-- The progress section is optional -->
			    <div class="progress">
			      <div class="progress-bar" style="width: 70%"></div>
			    </div>
			    <span class="progress-description">
			      <a style="color:white;" href="{{route('actor.index')}}" title="Lista">Ir a la lista.</a>
			    </span>
			  </div><!-- /.info-box-content -->
			</div><!-- /.info-box -->
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="info-box bg-green">
			  <span class="info-box-icon">{{count($directores)}}<i class="fa fa-comments-o"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">Directores</span>
			    <!-- The progress section is optional -->
			    <div class="progress">
			      <div class="progress-bar" style="width: 70%"></div>
			    </div>
			    <span class="progress-description">
			      <a style="color:white;" href="{{route('director.index')}}" title="Lista">Ir a la lista.</a>
			    </span>
			  </div><!-- /.info-box-content -->
			</div><!-- /.info-box -->
		</div>
	</div>

@endsection