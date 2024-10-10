@extends('layouts.plantilla')
@section('title', 'Editar aparato')
@section('content')
<div style="border-bottom: 1px solid;margin: auto;width: 95%;height: 550px;">
    <form action="{{route('device.actualizar', $device)}}" method="POST">
        @csrf
        @method('put')

        <label>
            Tipo:<br>
            <input type="text" name="tipo" value="{{old('tipo', $device->tipo)}}">
        </label>
        <br>
        @error('tipo')
            <h1 style="color: red">*{{ $message}}</h1>
        @enderror

        <label>
            Marca:<br>
            <input type="text" name="marca" value="{{old('marca', $device->marca)}}">
        </label>
        <br>
        @error('marca')
            <h1 style="color: red">*{{ $message}}</h1>
        @enderror

        <label>
            Modelo:<br>
            <input type="text" name="modelo" value="{{old('modelo', $device->modelo)}}">
        </label>
        <br>
        @error('modelo')
            <h1 style="color: red">*{{ $message}}</h1>
        @enderror

        <label>
            Potencia kW:<br>
            <input type="number" name="potencia_Kw" value="{{old('potencia_Kw', $device->potencia_Kw)}}">
        </label>
        <br>
        @error('potencia_Kw')
            <h1 style="color: red">*{{ $message}}</h1>
        @enderror
        <button type="submit">Enviar</button>
    </form>
</div>
@endsection    