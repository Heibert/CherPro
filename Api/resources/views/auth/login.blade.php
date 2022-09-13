@extends('layouts.app')
    @section('title', 'Login')
    @section('content')
    <div class="">

        <h1 class="">Iniciar sesion</h1>

        <form class="" action="" method="POST">
            @csrf
            <div>
            <label for="email">Gmail</label><br>
                <div>
                    <input type="email" class="" name="email" id="email" placehorder="Correo">
                </div>    
            </div>
            <br>

            <div>
                <label for="password">Contraseña</label><br>
                <div>
                    <input type="password" class="" name="password" id="password" placehorder="Contraseña">
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

        <button type="submit" class="">Ingresar</button>

        </form>

    </div>


    @endsection