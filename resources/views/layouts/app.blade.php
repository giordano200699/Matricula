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
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
        <nav class="col-md-2" style="background-color: #1A2226;padding: 0px;">
            <ul class="nav flex-column">
              <li class="nav-item"  style="background-color: #222D32">
                <a class="nav-link active" href="{{url('admin/usuarios')}}">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/documentos')}}">Documentos</a>
              </li>
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
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/documentos')}}">Documentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/documentos/crear')}}">Crear Documentos</a>
              </li>
            </ul>
        </nav>

        <main class="col-md-10">
            @yield('content')
        </main>
        </div>
    </div>
</body>
</html>
