@extends('layouts.vacio')

@section('content')
<link rel="stylesheet" href="{{asset('css/master.css')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="margin-top: 200px;">
            <div class="login-box">
              <img src="{{asset('css/barba.png')}}" class="avatar" alt="Avatar Image">
              <h1>Iniciar Sesión</h1>
              <form method="POST" action="{{ route('login') }}">
                 @csrf
                <!-- USERNAME INPUT -->
                <label for="username">Usuario</label>
                <input type="text" placeholder="Introduce tu usuario" name="email">
                <!-- PASSWORD INPUT -->
                <label for="password">Contraseña</label>
                <input type="password" placeholder="Introduce tu contraseña" name="password">
                <input type="submit" value="Iniciar sesión">
                <a href="#">Olvidaste tu contraseña?</a><br>
                <a href="#">No tienes cuenta?</a>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
