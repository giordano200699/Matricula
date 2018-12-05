@extends('layouts.vacio')

@section('content')
<link rel="stylesheet" href="{{asset('css/master.css')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"  style="margin-top: 180px;">
            <div class="login-box">
              <img src="{{asset('css/barba.png')}}" class="avatar" alt="Avatar Image">
              <h1  style="margin-bottom: 0px;">Registrarse</h1>
              <form method="POST" action="{{ route('register') }}">
                 @csrf
                <!-- USERNAME INPUT -->
                <label for="username">Nombre</label>
                <input type="text" placeholder="Introduce tu usuario" name="name">
                <label for="email">Correo</label>
                <input type="text" placeholder="Introduce tu usuario" name="email">
                <!-- PASSWORD INPUT -->
                <label for="password">Contraseña</label>
                <input type="password" placeholder="Introduce tu contraseña" name="password">
                <label for="password_confirmation">Contraseña</label>
                <input type="password" placeholder="Introduce tu contraseña" name="password_confirmation">
                <input type="submit" value="Registrase">
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
