<!DOCTYPE html>
<html lang="es">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>YusukeMovies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
        <!-- <link href="assets/css/admin.css" rel="stylesheet"> -->
        <link href="{{asset('/css/mystyle.css')}}" rel="stylesheet">
        <!-- CHOSEN -->
        <link href="{{asset('/plugins/chosen/chosen.css')}}" rel="stylesheet">
        <!-- CHOSEN -->

    </head>
    <body>
        <!-- Header -->
		<div id="top-nav" class="navbar navbar-static-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="icon-toggle"></span>
			  </button>
			  <a class="navbar-brand" href="#">2JMovies</a>
			</div>
			<!-- ------------------------ -->

			  <ul class="nav navbar-nav navbar-left">
				<li class="nav-style-li">
					<a class="nav-style-a" href="#">Pedidos<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="#">Sugerencias<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="#">Contacto<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="#">Peliculas<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="#">Categorias<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="#">Tags<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="#">Actores<span class=""></span></a>
				</li>
				<li class="nav-style-li">
					<a class="nav-style-a" href="#">Directores<span class=""></span></a>
				</li>

				<!-- Solo el administrador puede ver la opcion de usuarios -->

				<li class="nav-style-li">
					<a class="nav-style-a" href="#">Usuarios<span class=""></span></a>
				</li>
				
				<!-- Solo el administrador puede ver la opcion de usuarios -->

			  </ul>

			<!-- ------------------------ -->

			<!-- Si no estas logueado aparecera esta lista con la opcion de iniciar o registrar -->
			  <ul class="nav navbar-nav navbar-right">
			  	<li class="nav-style-li">
			  		<a class="nav-style-a" href="#">Iniciar Sesion<span class=""></span></a>
			  	</li>
			  	<li class="nav-style-li">
			  		<a class="nav-style-a" href="#">Registrar<span class=""></span></a>
			  	</li>
			  </ul>
			<!-- Si no estas logueado aparecera esta lista con la opcion de iniciar o registrar -->

			<!-- ------------------------ -->

			<!-- Si ya estas logueado te aparecera esta lista con tu nombre de usuario, la opcion de ir a tu perfil y la opcion de cerrar sesion -->

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
        </script>
        <!-- CHOSEN -->  

	</body>
</html>