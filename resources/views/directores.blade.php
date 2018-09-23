@extends('templates.layout.template')
@section('contentI')
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<table class="table text-center" id="tabla">
					<thead style="background: darkgray;">
						<tr>
							<th class="h4">Director</th>
							<th class="h4">Peliculas</t>
						</tr>
					</thead>
					<tbody style="background: gray;">
					@foreach($directores as $director)
						<tr>
							<td>
								<a class="h4 text-white" title="{{$director->biography}}" href="{{route('director.id',$director->id)}}">{{$director->firstname.' '.$director->lastname}}</a>
							</td>
							<td>
								<a class="h3 text-white" href="{{route('director.id',$director->id)}}">{{count($director->movies)}}</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>			
@endsection