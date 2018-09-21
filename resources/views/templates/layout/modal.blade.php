<a title="Add Widget" class="btn btn-info" data-toggle="modal" href="#addWidgetModal"> @yield('modal-btn','modal-btn') </a>

<div class="modal" id="addWidgetModal">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		<h4 class="modal-title"> @yield('modal-title','modal-title') </h4>
	  </div>
	  <div class="modal-body">
		<p> @yield('modal-content','modal-content') </p>
	  </div>
	  <div class="modal-footer">
		<a href="#" data-dismiss="modal" class="btn">Cerrar</a>
	  </div>
	</div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->