@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')

	<div class="row">
		<div class="col-md-6 col-xs-6">
			<div class="info-box bg-red">
			  <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">Peliculas</span>
			    <span class="info-box-number">{{count($peliculas)}}</span>
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
		<div class="col-md-6 col-xs-6">
			<div class="info-box bg-yellow">
			  <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">Categorias</span>
			    <span class="info-box-number">{{count($categorias)}}</span>
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
		<div class="col-md-6 col-xs-6">
			<div class="info-box bg-blue">
			  <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">Actores</span>
			    <span class="info-box-number">{{count($actores)}}</span>
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
		<div class="col-md-6 col-xs-6">
			<div class="info-box bg-green">
			  <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">Directores</span>
			    <span class="info-box-number">{{count($directores)}}</span>
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