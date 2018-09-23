@extends('templates.layout.template')
@section('contentI')
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<table class="table text-center" id="tabla">
					<thead style="background: darkgray;">
						<tr>
							<th class="h4">Actor</th>
							<th class="h4">Peliculas</t>
						</tr>
					</thead>
					<tbody style="background: gray;">
					@foreach($actores as $actor)
						<tr>
							<td>
								<a class="h4 text-white" title="{{$actor->biography}}" href="{{route('actor.id',$actor->id)}}">{{$actor->firstname.' '.$actor->lastname}}</a>
							</td>
							<td>
								<a class="h3 text-white" href="{{route('actor.id',$actor->id)}}">{{count($actor->movies)}}</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>			
@endsection