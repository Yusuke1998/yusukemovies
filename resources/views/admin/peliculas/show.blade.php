@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')

<div class="col-md-12">
		<div class="panel" style="background: #535888; color: white; padding: 10px;">
			<div class="panel-title">
				<p class="h5">{{$actor->firstname." ".$actor->lastname}}</p>
			</div>
			<div class="panel-body">
				<p class="h3">{{$actor->biography}}</p>
			</div>
			<div class="panel-footer">
				<p class="h5"><a href="{{route('actor.index')}}" title="Lista de actores">Volver a la lista.</a></p>
			</div>
		</div>
</div>
@endsection