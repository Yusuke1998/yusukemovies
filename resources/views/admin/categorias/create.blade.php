<div class="col-md-10">
		<div class="box box-info"
            <div class="box-body">
              <form action="{{route('obreros.create')}}" method="POST">
				    {!!csrf_field()!!}
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Nombre">
                </div>
                <div>
                  <textarea name="content" class="textarea" placeholder="Descripcion" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
	            <div class="box-footer clearfix">
	              <input value="Enviar" type="submit" class="pull-right btn btn-default">
	                <i class="fa fa-arrow-circle-right"></i>
	            </div>
              </form>
            </div>
        </div>
</div>