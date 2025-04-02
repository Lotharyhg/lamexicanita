@extends('layout.main_template')
@section('sectionMain')
    
    <h1>Register</h1>

    @dump($errors->all())

    <form action="{{route('register.handle')}}" method="POST">
        @csrf
        {{-- Name --}}
        <label for="name">Nombre</label>
        <input type="text" name="name">
        {{-- Email --}}
        <label for="email">Correo Electrónico</label>
        <input type="email" name="email">
        {{-- Password --}}
        <label for="password">Contraseña</label>
        <input type="password" name="password">
        {{-- Confirm Password --}}
        <label for="password_confirmation">Confirmar Contraseña</label>
        <input type="password" name="password_confirmation">

        <button type="submit"> Regitrar </button>
    </form>


@endsection