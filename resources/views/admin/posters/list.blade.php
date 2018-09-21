@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
<h1 class="text-center">Posters</h1>
<div class="row">
	<div class="col-md-12">
		@foreach($posters as $poster)
		<div class="col-md-2">
			<a href="" target="_blank" title="{{$poster->movie->title}}">
				<img class="img-thumbnail" src="/poster/{{$poster->name}}" alt="">
				<p class="text-center h5">{{$poster->movie->title}}</p>
			</a>
		</div>
		@endforeach
	</div>
</div>
		
@endsection