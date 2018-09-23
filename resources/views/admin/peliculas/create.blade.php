@extends('templates.layout.layout')
@section('content')
@include('templates.layout.info')
<div class="col-md-12">
		<div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Añadir pelicula</h3>
            </div>
            <div class="box-body">
              <form action="{{route('pelicula.store')}}" method="POST" enctype="multipart/form-data">
				      {!!csrf_field()!!}

                <div class="form-group">
                  <input type="text" value="{{old('title')}}" class="form-control" name="title" placeholder="Titulo">
                </div>
                <div>
                  <textarea name="sinopsis" class="textarea" placeholder="Sinopsis de la pelicula" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('sinopsis')}}</textarea>
                </div>
                <div>
                  <textarea name="content"  class="textarea" placeholder="Descripcion amplia de la pelicula" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('content')}}</textarea>
                </div>

                  <!-- SELECT -->
                  <div class="row">

                    <div class="col-md-3">
                      <select class="select" name="category_id">
                        <option value="">Categoria</option>
                          @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col-md-3">
                      <select class="select" name="year_id">
                        <option value="">Año</option>
                          @foreach($años as $año)
                            <option value="{{$año->id}}">{{$año->year}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col-md-3">
                      <select class="select" name="user_id">
                        <option value="">Usuario</option>
                          @foreach($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col-md-3">
                      <select class="select" name="director_id">
                        <option value="">Director</option>
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
                
                <!-- FILE UPLOAD -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="poster">Poster IMG (Requerido)</label><br>
                        <input id="poster" type="file" name="poster">
                    </div>
                    <div class="col-md-6">
                        <label for="poster_url">Poster URL (Opcional)</label><br>
                        <input required="false" value="Http://www.example.com" id="poster_url" type="url" name="poster_url">
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