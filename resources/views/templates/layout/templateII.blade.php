<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>YusukeMovies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="{{asset('/css/carousel.css')}}" rel="stylesheet">
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
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{route('index')}}">2JMovies</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <!-- ------------------------ -->
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
                </ul>
                <!-- ------------------------ -->

                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                      <li><a href="#">Iniciar Sesion</a></li>
                    <li><a href="#">Registrar</a></li>
                    <li><a href="#">Mi Perfil</a></li>
                    <li><a href="#">Cerrar Sesion</a></li>
                    </ul>
                  </li>
                  </ul>
                </div>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="container">
      <div class="row">
        @yield('asideI')
        @yield('contentI')
        @yield('asideII')
        @yield('contentII')
      </div>
    </div>


    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

    </div><!-- /.container -->


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