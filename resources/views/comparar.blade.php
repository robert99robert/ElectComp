@extends('layouts.plantilla')
@section('title', 'Nosotros')
@section('content')
<div style="width: 95%; height:25px">
</div>
<div style="border-bottom: 1px solid;margin: auto;width: 95%;height: 550px;">
     <div style="width: 20%; height:550px; border:1px solid; background-color:aliceblue; float:left">
          @foreach ($details as $detail)
                    <div style='height:30px; border-bottom:1px solid'>
                         {{$detail->tipo}} | {{$detail->marca}} | {{$detail->modelo}} |
                         <button style="color: red; background-color:yellow" type="button" id ="{{$detail->id}}" onclick="getPotencia_Kw(this.value, {{$detail->id}})" value="{{$detail->potencia_Kw}}">
                              {{$detail->potencia_Kw}}
                         </button>
                         kW
                    </div>
          @endforeach
     </div>
     <div style="width: 80%; height:550px; border:1px solid; float:left">
          <div style="width:33%; height:550px; border:1px solid; float:left">
               <div style="width: 100%; height:275px; border:1px solid;float: left;">
                    
               </div>
               <div style="width: 100%; height:275px; border:1px solid;float: left;">
                    2
               </div>
          </div>
          <div style="width:33%; height:550px; border:1px solid; float:left">
               <div style="width: 100%; height:275px; border:1px solid;float: left;">
                    3
               </div>
               <div id="xd" style="width: 100%; height:275px; border:1px solid;float: left;">
                    
               </div>
          </div>
          <div style="width:33%; height:550px; border:1px solid; float:left">
               <div style="width: 100%; height:275px; border:1px solid;float: left;">
                    5
               </div>
               <div id="demo" style="width: 100%; height:275px; border:1px solid;float: left;background-color:aliceblue">
                    
               </div>
          </div>
     </div>
   <p id="p">
        Hola
   </p>
   <button type="button" onclick='document.getElementById("p").innerHTML = "Hola 2"'>
        Click
   </button>   
</div>
<script>
     function getPotencia_Kw(value, $id){
         var potencia = document.getElementById($id).value;
         document.getElementById("xd").innerHTML = `La potencia es: ${potencia}`; 
     }
     var contador = 0;
     var details = <?php echo json_encode($details); ?>;
     
     details.forEach((detail) => {
          console.log(`${detail.modelo} tiene un a potencia de ${detail.potencia_Kw}`);
          contador = contador + detail.potencia_Kw;
     });
     document.getElementById("demo").innerHTML = `La suma de potencia es: ${contador}`;
</script>
@endsection 