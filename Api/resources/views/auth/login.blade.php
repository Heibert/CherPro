@extends('layouts.app')
@section('title', 'Iniciar Sesión')
 @section('content')
    <link rel="stylesheet" href="{{ url('css/login-auth.css')}}">
    <div class="main-login">

        

        <br><form class="login" id="login" action="" method="POST">
            @csrf
            <h1 class="formulario__titulo">Iniciar Sesión</h1>
            <br>
            <div class="formulario__grupo" id="formulario__correo">
                <label for="Correo" class="formulario__label">Correo</label><br>
                <div class="formulario__grupo-input">
                    <input type="email" class="formulario__input" name="email" id="email" placeholder="Correo" value="{{old('email')}}">
                </div>
            </div>
            <br>

            <div class="formulario__grupo" id="formulario__password">
                <label for="password" class="formulario__label">Contraseña</label><br>
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password" id="password" placeholder="Contraseña">
                </div>
            </div>

            @error('message')
                <span>
                    <br>
                    <strong>{{$message}}</strong>
                <span>
            @enderror
            <br>
            <br>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn" name="" id="">Ingresar</button>
            </div>
        </form>
    </div>
 @endsection