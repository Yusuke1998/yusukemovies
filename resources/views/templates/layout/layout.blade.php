<!DOCTYPE html>
<html lang="es">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>YusukeMovies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
        <link href="assets/css/admin.css" rel="stylesheet">
        <!-- CHOSEN -->
        <link href="{{asset('/plugins/chosen/chosen.css')}}" rel="stylesheet">
        <!-- CHOSEN -->
        <!-- DATA-TABLES -->
        <link href="{{asset('/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet">
        <!-- DATA-TABLES -->
        
    </head>
    <body>  
        <!-- Header -->
		<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="icon-toggle"></span>
			  </button>
			  <a class="navbar-brand" href="{{route('admin.index')}}">YMovies</a>
			</div>
			<div class="navbar-collapse collapse">
			  <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
				  <ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="#">Mi Perfil</a></li>
					<li><a href="#">Cerrar Sesion</a></li>
				  </ul>
				</li>
			  </ul>
			</div>
		  </div><!-- /container -->
		</div>
		<!-- /Header -->
		<!-- Main -->
		<div class="container">
			<div class="row">
				<div class="col-md-3 pull-left">
				  <!-- Left column -->
				  <a href="#"><strong><i class="glyphicon glyphicon-start"></i> Opciones</strong></a>  
				  
				  <hr>
				  
				  <ul class="list-unstyled">
					<li class="nav-header"> <a class="" href="#" data-toggle="collapse" data-target="#userMenu">
					  <h5>Editar <i class="glyphicon glyphicon-chevron-down"></i></h5>
					  </a>
						<ul style="height: auto;" class="list-unstyled in" id="userMenu">
							<li class="active"> <a href="{{route('usuario.index')}}"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>
							<li><a href="{{route('actor.index')}}"><i class="glyphicon glyphicon-star"></i> Actores</a></li>
							<li><a href="{{route('director.index')}}"><i class="glyphicon glyphicon-facetime-video"></i> Directores</a></li>
							<li><a href="{{route('pelicula.index')}}"><i class="glyphicon glyphicon-film"></i> Peliculas</a></li>
							<li><a href="{{route('categoria.index')}}"><i class="glyphicon glyphicon-list"></i> Categorias</a></li>
							<li><a href="{{route('tag.index')}}"><i class="glyphicon glyphicon-tag"></i> Tags</a></li>
							<li><a href="{{route('poster.index')}}"><i class="glyphicon glyphicon-folder-open"></i> Poster</a></li>
						</ul>
					</li>
				  </ul>
				</div>
				<div class="col-md-9">
					@yield('content')
				</div>
			</div>
		</div>
		<!-- Main -->
		<script type="text/javascript" src="{{asset('/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
        <!-- CHOSEN -->
        <script type="text/javascript" src="{{asset('/plugins/chosen/chosen.jquery.js')}}"></script>

        <script type="text/javascript">
        	 $(".select").chosen({
			    no_results_text: "Oops, no hay coincidencias!",
			    width: "100%",
			  });
        </script>
        <script type="text/javascript">
        	 $(".select_multiple").chosen({
        	 	multiple:true,
        	 	placeholder_text_multiple:"Selecciona tags!",
			    no_results_text: "Oops, no hay coincidencias!",
			    width: "100%",
			  });

        	 $(".select_multiple2").chosen({
        	 	multiple:true,
        	 	placeholder_text_multiple:"Selecciona actores!",
			    no_results_text: "Oops, no hay coincidencias!",
			    width: "100%",
			  });
        </script>
        <!-- CHOSEN -->
        <!-- DATA TABLES -->
        <script type="text/javascript" src="{{asset('/plugins/datatables/jquery.dataTables.js')}}"></script>  

        <script type="text/javascript" src="{{asset('/plugins/datatables/dataTables.bootstrap.js')}}"></script>  

        <script>
		  $(function () {
		    $("#tabla").DataTable(
		    	{
			      "language":{
			       "lengthMenu":"Mostrar _MENU_ registros por página.",
			       "zeroRecords": "Lo sentimos. No se encontraron registros.",
			             "sInfo": "Mostrando: _START_ de _END_ - Total registros: _TOTAL_ ",
			             "infoEmpty": "No hay registros aún.",
			             "infoFiltered": "(filtrados de un total de _MAX_ registros)",
			             "search" : "Búsqueda",
			             "LoadingRecords": "Cargando ...",
			             "Processing": "Procesando...",
			             "SearchPlaceholder": "Escribe...",
			             "paginate": {
			     "previous": "Anterior",
			     "next": "Siguiente", 
			        }
			    }
			}

    	);
	    
	  });
		</script>
        <!-- DATA TABLES -->

	</body>
</html>