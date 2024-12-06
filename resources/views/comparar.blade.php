@extends('layouts.plantilla')
@section('title', 'Nosotros')
@section('content')
<div style="width: 95%; height:25px">
</div>
<div style="border-bottom: 1px solid;margin: auto;width: 95%;height: 550px">
     <div style="width: 20%; height:550px; border:1px solid; background-color:aliceblue; float:left">
          <?php $x = 99;
                $y = 199; 
          ?>
          @foreach ($details as $detail)
               <?php $x = $x + 1;
                     $y = $y + 1;
               ?>
                    <div style='height:50px; border-bottom:1px solid'>
                         <div style='height:30px; position:absolute' id="{{$x}}">
                              <div id="{{$y}}"><img src="https://cdn3.iconfinder.com/data/icons/touch-hand-gestures/60/touch_gestures_tap_drag_move-512.png" width="30px" height="50px"></div>
                              {{$detail->tipo}} | {{$detail->marca}} | {{$detail->modelo}} |
                              <button style="color: red; background-color:yellow" 
                                        type="button" 
                                        id ="{{$detail->id}}" 
                                        value="{{$detail->potencia_Kw}}" 
                                        onclick="sumarPotenciasKw(this.value, {{$detail->id}})">
                                             {{$detail->potencia_Kw}}
                              </button>
                              W
                         </div>
                    </div>
          @endforeach
                    <div style='height:25px; border-bottom:1px solid'>
                         <button type="button" onclick="reiniciarSuma()" style="background-color: #f44336; width:280px">
                              Reiniciar
                         </button>
                    </div>
                    <div style='height:42px; border-bottom:1px solid'>
                              Horas:
                              <input id="cantidadHoras" type="number">
                    </div>
                    <div style='height:30px; border-bottom:1px solid' id="monto">
                    </div>
     </div>
     <div style="width: 80%; height:550px; border:1px solid; float:left; background:url(https://casascarbonell.es/wp-content/uploads/2023/11/plantacasas50-scaled.jpg); background-size:100% 100%">
     </div> 
</div>
<script>
     var suma = 0;
     var kW = 152;

     function sumarPotenciasKw(value, id){
         var potencia = (Number(document.getElementById(id).value)) / 1000;
         var cantidadHoras = Number(document.getElementById("cantidadHoras").value);
         var multiplicacion = potencia * cantidadHoras;
         suma = suma + multiplicacion;
         var monto = suma * kW;
         document.getElementById("monto").innerHTML = `${suma.toFixed(4)} kW por ${monto.toFixed(2)} pesos`;
     }

     function reiniciarSuma(){
          suma = 0;
          document.getElementById("monto").innerHTML = `0 kW por 0 pesos`;
     }

     /*var contador = 0;
     var details = <?php echo json_encode($details); ?>;
     
     details.forEach((detail) => {
          console.log(`${detail.modelo} tiene un a potencia de ${detail.potencia_Kw}`);
          contador = contador + detail.potencia_Kw;
     });
     document.getElementById("demo").innerHTML = `La suma de potencia es: ${contador}`;
     */
     for ($x = 100; $x <= 200; $x++) {
          dragElement(document.getElementById($x));
          function dragElement(elmnt) {
               var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
               if (document.getElementById($x + 100)) {
               // if present, the header is where you move the DIV from:
                    document.getElementById($x + 100).onmousedown = dragMouseDown;
                                                       } 
               else {
               // otherwise, move the DIV from anywhere inside the DIV:
                    elmnt.onmousedown = dragMouseDown;
                    }

               function dragMouseDown(e) {
                    e = e || window.event;
                    e.preventDefault();
                    // get the mouse cursor position at startup:
                    pos3 = e.clientX;
                    pos4 = e.clientY;
                    document.onmouseup = closeDragElement;
                    // call a function whenever the cursor moves:
                    document.onmousemove = elementDrag;
                                        }

                    function elementDrag(e) {
                    e = e || window.event;
                    e.preventDefault();
                    // calculate the new cursor position:
                    pos1 = pos3 - e.clientX;
                    pos2 = pos4 - e.clientY;
                    pos3 = e.clientX;
                    pos4 = e.clientY;
                    // set the element's new position:
                    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
                    }

                    function closeDragElement() {
                    // stop moving when mouse button is released:
                    document.onmouseup = null;
                    document.onmousemove = null;
                    }
               }
          }
</script>
@endsection 