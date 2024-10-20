@extends('layouts.plantilla')
@section('title', 'Nosotros')
@section('content')
<div style="width: 95%; height:25px">
</div>
<div style="border-bottom: 1px solid;margin: auto;width: 95%;height: 550px;">
      <form class="max-w-sm mx-auto" action="{{route('detail.almacenar')}}" method="POST">
            @csrf
            <label for="devices" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleciona un aparato</label>
            <select name="id_de" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  @foreach ($devices as $device)
                  <option value="{{$device->id}}">
                        {{$device->tipo}} | {{$device->marca}} | {{$device->modelo}}
                  </option>
                  @endforeach
           </select>
            <label for="prices" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleciona un tarifa</label>
            <select id="" name="id_pr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  @foreach ($prices as $price)
                  <option value="{{$price->id}}">
                        {{$price->tarifa_menor}} | {{$price->tarifa_mayor}} | {{$price->pais}}
                  </option>
                  @endforeach
            </select>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
      </form>
</div>
@endsection 