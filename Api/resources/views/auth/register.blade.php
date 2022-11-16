
@extends('layouts.app')
@vite(['resources/css/app.css'])
    @section('title', 'Registrarse')
    @section('content')
    <link rel="stylesheet" href="{{ url('css/login-auth.css')}}">
    <main>  

    <h1 class="formulario__titulo">Registrarse</h1>
        <form class="formulario" id="formulario" action="" method="POST">
            @csrf
            <div class="formulario__grupo" id="formulario__nombre">
                <label for="name" class="formulario__label">Nombre</label><br>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="name" id="name" placeholder="Nombre" value="{{old('name')}}">
                </div>
                @error('name')
                    <span>
                        <strong class="formulario__input-error" >{{$message}}</strong>
                    <span>
                @enderror
            </div>
            
            <div class="formulario__grupo" id="formulario__apellido">
                <label for="apellido" class="formulario__label">Apellido</label><br>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="apellido" value="{{old('apellido')}}">
                </div>
                @error('apellido')
                    <span>
                        <strong class="formulario__input-error">{{$message}}</strong>
                    <span>
                @enderror
            </div>

            <div class="formulario__grupo" id="formulario__telefono">
                <label for="telefono" class="formulario__label">Telefono</label><br>
                <div class="formulario__grupo-input">
                    <input type="number" class="formulario__input" name="telefono" id="telefono" placeholder="Número de telefono" value="{{old('telefono')}}">
                </div>
                @error('telefono')
                    <span>
                        <strong class="formulario__input-error">{{$message}}</strong>
                    <span>
                @enderror
            </div>

            <div class="formulario__grupo" id="formulario__correo">
                <label for="Correo" class="formulario__label">Correo</label><br>
                <div class="formulario__grupo-input">
                    <input type="email" class="formulario__input" name="email" id="email" placeholder="Correo" value="{{old('email')}}">
                </div>
                @error('email')
                    <span>
                        <strong class="formulario__input-error">{{$message}}</strong>
                    <span>
                @enderror
            </div>

            <div class="formulario__grupo" id="formulario__password">
                <label for="password" class="formulario__label">Contraseña</label><br>
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password" id="password" placeholder="Contraseña">
                </div>
                @error('password')
                    <span>
                        <strong class="formulario__input-error">{{$message}}</strong>
                    <span>
                @enderror
            </div>

            <div class="formulario__grupo" id="formulario__password2">
                <label for="password_confirmation" class="formulario__label">Confirmar Contraseña</label><br>
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña">
                </div>
                @error('password_confirmation')
                    <span>
                        <strong class="formulario__input-error">{{$message}}</strong>
                    <span>
                 @enderror
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn" name="" id="">Registrarse</button><br>
                <div class="formulario__titulo text-center"></div>
                <div class="formulario__grupo-input">
                <a href="" class="text-black btn btn-outline-primary"><i class="bi bi-person"> Iniciar Sesión</i></a>
            </div>
            </div>
        </form>  
    </main>    
    @endsection

    