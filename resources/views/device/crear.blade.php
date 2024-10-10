@extends('layouts.plantilla')
@section('title', 'Crear aparato')
@section('content')
<div style="border-bottom: 1px solid;margin: auto;width: 95%;height: 550px;">
    <form action="{{route('device.almacenar')}}" method="POST">
        @csrf
        <label>
            Tipo:<br>
            <input type="text" name="tipo" value="{{old("tipo")}}">
        </label>

        <br>
        @error('tipo')
            <a style="color: red; font-size:x-small">*{{ $message}}</a>
        @enderror
        <br>

        <label>
            Marca:<br>
            <input type="text" name="marca" value="{{old("marca")}}">
        </label>

        <br>
        @error('marca')
            <a style="color: red; font-size:x-small">*{{ $message}}</a>
        @enderror
        <br>

        <label>

            Modelo:<br>
            <input type="text" name="modelo" value="{{old("modelo")}}">
        </label>
        
        <br>
        @error('modelo')
            <a style="color: red; font-size:x-small">*{{ $message}}</a>
        @enderror
        <br>

        <label>
            Potencia kW:<br>
            <input type="number" name="potencia_Kw" value="{{old("potencia_Kw")}}">
        </label>

        <br>
        @error('potencia_Kw')
            <a style="color: red; font-size:x-small">*{{ $message}}</a>
        @enderror
        <br>

        <button type="submit">Enviar</button>
    </form>
</div>
@endsection    