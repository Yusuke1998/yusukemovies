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
                  <textarea name="sinopsis" value="{{$pelicula->sinopsis}}" class="textarea" placeholder="Sinopsis de la pelicula" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {{$pelicula->sinopsis}}
                  </textarea>
                </div>
                <div>
                  <textarea name="content"  value="{{$pelicula->content}}" class="textarea" placeholder="Descripcion amplia de la pelicula" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {{$pelicula->content}}
                  </textarea>
                </div>

                  <!-- SELECT -->
                  <div class="row">

                    <div class="col-md-3">
                      <select class="select" name="category_id">
                          @foreach($categorias as $categoria)
                              <option selected="pelicula->category->id" value="{{$categoria->id}}">{{$categoria->name}}
                              </option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col-md-3">
                      <select class="select" name="year_id">
                          @foreach($años as $año)
                            <option selected="$pelicula->year->year" value="{{$año->id}}">{{$año->year}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col-md-3">
                      <select class="select" name="user_id">
                          @foreach($usuarios as $usuario)
                            <option selected="$pelicula->user->id" value="{{$usuario->id}}">{{$usuario->name}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col-md-3">
                      <select class="select" name="director_id">
                          @foreach($directores as $director)
                            <option selected="$pelicula->director->id" value="{{$director->id}}">{{$director->firstname." ".$director->lastname}}</option>
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
                
                <!-- FILE UPLOAD -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="poster">Poster IMG (Requerido)</label><br>
                        <input id="poster" type="file" name="poster">
                    </div>
                    <div class="col-md-6">
                        <label for="poster_url">Poster URL (Opcional)</label><br>
                        <input value="Http://www.example.com" id="poster_url" type="url" name="poster_url">
                    </div>
                </div>
                <!-- FILE UPLOAD -->

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