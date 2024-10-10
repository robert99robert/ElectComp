@extends('layouts.plantilla')
@section('title', 'Crear usuario')
@section('content')
<div style="border-bottom: 1px solid;margin: auto;width: 95%;height: 550px;">
    <form action="{{route('user.almacenar')}}" method="POST">
        @csrf
        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old("name")}}">
        </label>
        <br>
        @error('name')
            <a style="color: red; font-size:x-small">*{{ $message}}</a>
        @enderror
        <br>

        <label>
            Correo electrónico:<br>
            <input type="email" name="email" value="{{old("email")}}">
        </label>
        <br>
        @error('email')
            <a style="color: red; font-size:x-small">*{{ $message}}</a>
        @enderror
        <br>

        <label>
            Contraseña:<br>
            <input type="password" name="password">
        </label>
        <br>
        @error('password')
            <a style="color: red; font-size:x-small">*{{ $message}}</a>
        @enderror
        <br>

            <input type="hidden" name="role" value="A">
        

        <button type="submit">Enviar</button>
    </form>
</div>
@endsection    