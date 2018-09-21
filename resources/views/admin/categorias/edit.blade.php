@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
<div class="col-md-10">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Editar categoria</h3>
            </div>
            <div class="box-body">
              <form action="{{route('categoria.update',$categoria->id)}}" method="POST">
            {!!csrf_field()!!}
                <input type="hidden" value="PUT" name="_method">

                <div class="form-group">
                  <input type="text" value="{{$categoria->name}}" class="form-control" name="name" placeholder="Nombre">
                </div>
                <div>
                  <textarea name="content" class="textarea" placeholder="Descripcion" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {{$categoria->content}}
                  </textarea>
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