@extends('layouts.plantilla')
@section('title', 'Crear aparato')
@section('content')
<div style="width: 95%; height:25px">
    
</div>
<div style="border-bottom: 1px solid;margin: auto;width: 95%;height: 550px;">
    <h1>Ingrese los datos del dispositivo</h1>
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

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Enviar</button>
    </form>
</div>
@endsection    