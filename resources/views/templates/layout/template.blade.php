<!DOCTYPE html>
<html lang="es">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>YusukeMovies</title>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
        <!-- <link href="assets/css/admin.css" rel="stylesheet"> -->
        <link href="{{asset('/css/mystyle.css')}}" rel="stylesheet">
        <!-- CHOSEN -->
        <link href="{{asset('/plugins/chosen/chosen.css')}}" rel="stylesheet">
        <!-- CHOSEN -->
         <!-- DATA-TABLES -->
        <link href="{{asset('/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet">
        <!-- DATA-TABLES -->
        <link href="{{asset('/css/AdminLTE.css')}}" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
		<div id="top-nav" class="navbar navbar-static-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="glyphicon glyphicon-list"></span>
              </button>
			  <a class="navbar-brand" href="{{route('index')}}">2JMovies</a>
			</div>
			<!-- ------------------------ -->
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav navbar-left">
				<li class="nav-style-li">
					<a class="nav-style-a" href="{{route('pedidos')}}">Pedidos<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="{{route('sugerencias')}}">Sugerencias<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="{{route('contacto')}}">Contacto<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="{{route('peliculas')}}">Peliculas<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="{{route('categorias')}}">Categorias<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="{{route('actores')}}">Actores<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="{{route('directores')}}">Directores<span class=""></span></a>
				</li>
				<li class="dropdown">
				  <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
				  	<i class="glyphicon glyphicon-user"></i>
				  	@if(Auth::user())
				  		{{Auth::user()->name}}
				  	@else
				  		Usuario
				  	@endif
				  	<span class="caret">
				  	</span></a>
				  <ul id="g-account-menu" class="dropdown-menu" role="menu">
				@guest
				  	<li><a href="{{route('login')}}">Iniciar Sesion</a></li>
					<li><a href="{{route('register')}}">Registrar</a></li>
				@else
					<li><a href="{{route('admin.index')}}">{{ Auth::user()->name }}</a></li>
					<li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Cerrar Sesion</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </li>
				  </ul>
                @endguest
				</li>
			  </ul>
			<!-- ------------------------ -->
			</div>
			<!-- Si ya estas logueado te aparecera esta lista con tu nombre de usuario, la opcion de ir a tu perfil y la opcion de cerrar sesion -->

			<!-- ------------------------ -->

		  </div><!-- /container -->
		</div>
		<!-- /Header -->
		<div class="container">
			<div class="row">
				@yield('asideI')
				@yield('contentI')
				@yield('asideII')
				@yield('contentII')
			</div>
		</div>
		<!-- Footer -->
		<footer class="text-center">Derechos Reservados <a href="#"><strong>JJPM</strong></a></footer>
        
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