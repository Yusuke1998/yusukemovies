@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
<div class="col-md-10">
		<div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Editar usuario</h3>
            </div>
            <div class="box-body">
              <form action="{{route('usuario.update',$usuario->id)}}" method="post">
				{!!csrf_field()!!}
				<input type="hidden" value="PUT" name="_method">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Nombre(s)" value="{{$usuario->name}}">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" value="{{$usuario->email}}" placeholder="Correo">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Contraseña">
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