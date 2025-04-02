@extends('layout.main_template')
@section('sectionMain')
    
    <h1>Login</h1>

    @dump($errors->all())

    <form action="{{route('login.handle')}}" method="POST">
        @csrf
        {{-- Email --}}
        <label for="email">Correo Electrónico</label>
        <input type="email" name="email">
        {{-- Password --}}
        <label for="password">Contraseña</label>
        <input type="password" name="password">

        <button type="submit"> Login </button>
    </form>


@endsection