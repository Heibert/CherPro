@extends('layouts.app')

    @section('title', 'Register')
    @section('content')
    <div>
        <h1>Registrarse</h1>

        <form class="formulario" id="formulario" action="" method="POST">

            @csrf

            <div class="formulario__grupo" id="formulario__grupo">
                <label for="name">Nombre</label><br>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="name" id="name" placeholder="Nombre" value="{{old('name')}}">
                    <i class="fa-light fa-circle-quarters"></i>
                </div>
                @error('name')
                    <span>
                        <br>
                        <strong>{{$message}}</strong>
                    <span>
                @enderror
            </div>
            <br>
            
            <div>
                <label for="apellido">Apellido</label><br>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="apellido" value="{{old('apellido')}}">
                </div>
                @error('apellido')
                    <span>
                        <br>
                        <strong>{{$message}}</strong>
                    <span>
                @enderror
            </div>
            <br>

            <div>
                <label for="telefono">Telefono</label><br>
                <div class="formulario__grupo-input">
                    <input type="number" class="formulario__input" name="telefono" id="telefono" placeholder="Número de telefono" value="{{old('telefono')}}">
                </div>
                @error('telefono')
                    <span>
                        <br>
                        <strong>{{$message}}</strong>
                    <span>
                @enderror
            </div>
            <br>

            <div>
                <label for="Correo">Correo</label><br>
                <div class="formulario__grupo-input">
                    <input type="email" class="formulario__input" name="email" id="email" placeholder="Correo" value="{{old('email')}}">
                </div>
                @error('email')
                    <span>
                        <br>
                        <strong>{{$message}}</strong>
                    <span>
                @enderror
            </div>
            <br>

            <div>
                <label for="password">Contraseña</label><br>
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password" id="password" placeholder="Contraseña">
                </div>
                @error('password')
                    <span>
                        <br>
                        <strong>{{$message}}</strong>
                    <span>
                @enderror
            </div>
            <br>

            <div>
                <label for="password_confirmation">Contraseña</label><br>
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña">
                </div>
                @error('password_confirmation')
                    <span>
                        <br>
                        <strong>{{$message}}</strong>
                    <span>
                 @enderror
            </div>
            <br>

        <button type="submit" class="" name="" id="">Ingresar</button>

    </div>
    @endsection