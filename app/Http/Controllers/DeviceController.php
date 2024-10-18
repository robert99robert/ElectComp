<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Http\Requests\AlmacenarDevice;
use App\Http\Requests\ActualizarDevice;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    public function listar(){
        $devices = Device::orderBy('id', 'desc')->paginate(5);//crear un objeto de tipo Device y la ordena desde el id más 
                                                                //alto al más bajo, mostrando sólo los primeros 5 registros
        return view('device.listar', compact("devices"));//retorna la vista que está en la ruta device/listar junto con el objeto devices dentro de una función compact
    }
    public function crear(){
        return view('device.crear');
    }
    public function almacenar(AlmacenarDevice $request){
        $device = Device::create($request->all());
        return redirect()->route('device.listar');
    }
    public function editar($id){
        $device = Device::find($id);
        return view('device.editar', compact('device'));
    }

    public function actualizar($id, ActualizarDevice $request){//(id del aparato que viene de $device->id proveniente del action del formulario device/editar
                                                        // objeto que recoje los datos del formulario actualizado)
        $device = Device::find($id);//crea un objeto tipo Device con el id dado
        $device->update($request->all());
        return redirect()->route('device.listar');//redirige a la ruta 'device.listar' que acciona la función listar del controlador device que a su vez retorna la vista listar
                                                    //que se encuentra en la ruta device/listar
    }

    public function eliminar($id){
        $device = Device::find($id);
        $device->delete();
        return redirect()->route('device.listar');
    }

    public function buscar(){
        $device = DB::select('select * from devices where potencia_Kw = ?', [15]);
        return view('device.prueba', compact('device'));
    }
}