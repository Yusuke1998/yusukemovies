@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
<div class="col-md-10">
		<div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Editar actor</h3>
            </div>
            <div class="box-body">
              <form action="{{route('actor.update',$actor->id)}}" method="post">
				{!!csrf_field()!!}
				<input type="hidden" value="PUT" name="_method">
                <div class="form-group">
                  <input type="text" class="form-control" name="firstname" placeholder="Nombre(s)" value="{{$actor->firstname}}">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="lastname" value="{{$actor->lastname}}" placeholder="Apellido(s)">
                </div>
                <div>
                  <textarea name="biography" value="{{$actor->biography}}" class="textarea" placeholder="Biografia del actor" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            <div class="box-footer clearfix">
              <input value="Enviar" type="submit" class="pull-right btn btn-default">
                <i class="fa fa-arrow-circle-right"></i>
            </div>
              </form>
            </div>
        </div>
</div>
@endsection