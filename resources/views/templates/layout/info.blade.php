@foreach($errors->all() as $error)
	<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{$error}}
    </div>
@endforeach

@if(session('info'))
	<div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> Aviso!</h4>
        {{session('info')}}
    </div>
@endif