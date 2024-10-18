@extends('layouts.plantilla')
@section('title', 'Nosotros')
@section('content')
<div style="width: 95%; height:25px">
</div>
<div style="border-bottom: 1px solid;margin: auto;width: 95%;height: 550px;">
      @foreach ($device as $devic)
      xd {{$devic->marca}}
      @endforeach
      
</div>

@endsection 