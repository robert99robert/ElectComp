<?php
session_start();
?>
@extends('layouts.plantilla')
@section('title', 'Nosotros')
@section('content')
<div style="border-bottom: 1px solid;margin: auto;width: 95%;height: 550px;">
   <div class="relative flex flex-col w-full h-full text-slate-700 bg-white shadow-md rounded-xl bg-clip-border">
    
       <div class="relative mx-4 mt-4 overflow-hidden text-slate-700 bg-white rounded-none bg-clip-border">
           <div class="flex items-center justify-between ">
               <div>
                   <h3 class="text-lg font-semibold text-slate-800">Lista de aparatos</h3>
               </div>
                <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                </div>
           </div>
       </div>
       <div class="p-0 overflow-scroll">
        
           <table class="w-full mt-4 text-left table-auto min-w-max">
           <thead>
               <tr>
               <th
                   class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                   <p
                   class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                   Tipo
                   
                   </p>
               </th>
               <th
                   class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                   <p
                   class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                   Marca
                   </p>
               </th>
               <th
                   class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                   <p
                   class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                   Modelo
                   </p>
               </th>
               <th
                   class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                   <p
                   class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                   Potencia kW
                   </p>
               </th>
               <th
                   class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                   <p
                   class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                   </p>
               </th>
               <th
                   class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                   <p
                   class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                   </p>
               </th>
               </tr>
           </thead>
           <tbody>
            @foreach ($devices as $device)
               <tr>
               <td class="p-4 border-b border-slate-200">
                   <div class="flex items-center gap-3">
                    <div class="flex flex-col">
                       <p class="text-sm font-semibold text-slate-700">
                       {{$device->tipo}}
                       </p>
                   </div>
                   </div>
               </td>
               <td class="p-4 border-b border-slate-200">
                   <div class="flex flex-col">
                   <p class="text-sm font-semibold text-slate-700">
                       {{$device->marca}}
                   </p>
                   </div>
               </td>
               <td class="p-4 border-b border-slate-200">
                <div class="flex flex-col">
                    <p class="text-sm font-semibold text-slate-700">
                        {{$device->modelo}}
                    </p>
                    </div>
               </td>
               <td class="p-4 border-b border-slate-200">
                   <p class="text-sm text-slate-500">
                   {{$device->potencia_Kw}}
                   </p>
               </td>
               <td class="p-4 border-b border-slate-200">
                   <!--<button
                   class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                   type="button">
                   <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                       class="w-4 h-4">
                       <path
                           d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                       </path>
                       </svg>
                   </span>
                   </button>-->
                   <a href="{{route('device.editar', $device->id)}}">
                    Editar
                   </a>
               </td>
               <td class="p-4 border-b border-slate-200">
                <!--<button
                class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                    class="w-4 h-4">
                    <path
                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                    </path>
                    </svg>
                </span>
                </button>-->
                <a href="{{route('device.eliminar', $device->id)}}">
                 Eliminar
                </a>
            </td>
               </tr>
               @endforeach
               
           </tbody>
           </table>
           
       </div>
       {{$devices->links()}}
       </div>
       
</div>
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

@endsection    