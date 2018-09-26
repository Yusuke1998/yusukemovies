@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
<div class="col-md-12">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Editar pelicula</h3>
            </div>
            <div class="box-body">
              <form action="{{route('pelicula.update',$pelicula->id)}}" method="POST" enctype="multipart/form-data">
              {!!csrf_field()!!}
                <input type="hidden" value="PUT" name="_method">

                <div class="form-group">
                  <input type="text" value="{{$pelicula->title}}" class="form-control" name="title" placeholder="Titulo">
                </div>
                <div>
                  <textarea name="sinopsis" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$pelicula->sinopsis}}
                  </textarea>
                </div>
                <div>
                  <textarea name="content" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$pelicula->content}}
                  </textarea>
                </div>

                  <!-- SELECT -->
                  <div class="row">

                    <div class="col-md-4">
                      <select class="select" name="category_id">
                        <option>-categoria-</option>
                          @foreach($categorias as $categoria)
                              <option value="{{$categoria->id}}">{{$categoria->name}}
                              </option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col-md-4">
                      <select class="select" name="year_id">
                        <option>-año-</option>
                          @foreach($años as $año)
                            <option value="{{$año->id}}">{{$año->year}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col-md-4">
                      <select class="select" name="director_id">
                        <option>-director-</option>
                          @foreach($directores as $director)
                            <option value="{{$director->id}}">{{$director->firstname." ".$director->lastname}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col-md-6">
                        <select name="tags[]" class="select_multiple" multiple>
                          @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                          @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <select name="actors[]" class="select_multiple2" multiple>
                          @foreach($actores as $actor)
                            <option value="{{$actor->id}}">{{$actor->firstname.' '.$actor->lastname}}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <!-- SELECT -->

                <div class="box-footer clearfix">
                  <input value="Enviar" type="submit" class="pull-right btn  btn-primary">
                    <i class="fa fa-arrow-circle-right"></i>
                </div>

              </form>
            </div>
        </div>
</div>
<div class="col-md-12">

</div>
@endsection