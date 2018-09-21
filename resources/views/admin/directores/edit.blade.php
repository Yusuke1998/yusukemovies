@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
<div class="col-md-10">
		<div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Editar director</h3>
            </div>
            <div class="box-body">
              <form action="{{route('director.update',$director->id)}}" method="post">
				{!!csrf_field()!!}
				<input type="hidden" value="PUT" name="_method">
                <div class="form-group">
                  <input type="text" class="form-control" name="firstname" placeholder="Nombre(s)" value="{{$director->firstname}}">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="lastname" value="{{$director->lastname}}" placeholder="Apellido(s)">
                </div>
                <div>
                  <textarea name="biography" value="{{$director->biography}}" class="textarea" placeholder="Biografia del director" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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