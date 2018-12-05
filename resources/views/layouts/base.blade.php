<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/adminLTE/AdminLTE.min.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('base/css/simple-sidebar.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('base/css/Searchbar.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('base/css/mrtnCSS/search.css')}}">
    <link rel="stylesheet" href="{{ asset('base/css/4-col-portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/mrtnCSS/bio.css')}} ">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                  <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"> Menu</a>
                  <a class="navbar-brand" href="{{url('')}}">Waldo System</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/alumnos')}}">My Profile</a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('/logout')}}">Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

        

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
                <ul class="sidebar-nav" style="padding-top: 68px;">
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/alumnos')}}">Mostrar Alumnos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/alumnos/crear')}}">Crear Alumno</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/tipoDocumentos')}}">Tipo de Documentos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/tipoDocumentos/crear')}}">Crear Tipo de Documento</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/gradosAcademicos')}}">Grados Académicos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/gradosAcademicos/crear')}}">Crear Grado Académico</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/documentos')}}">Documentos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/documentos/crear')}}">Crear Documentos</a>
                    </li> -->
                   
                </ul>
            </div>
       

        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"> Menu</a>
                <!-- Page Content -->
    <div class="container">
      <main class="row" style="margin-top: 30px;">
            @yield('content')
        </main>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('base/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#wrapper").toggleClass("toggled");
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    
    
    function myFunction() {
    // Declare variables
    console.log("Hola");
    var input, filter, ul, li, a, i;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    li = document.getElementsByClassName("card")

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h6")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
    </script>

</body>

</html>
