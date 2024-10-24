<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use Illuminate\Support\Facades\DB;

class CompareController extends Controller
{
    public function comparar(){
        //$details = DB::select('select * from details join devices');
        $details = DB::table('details')
            ->join('devices', 'details.id_de', '=', 'devices.id')
            ->select('details.id', 'devices.tipo','devices.marca','devices.modelo', 'devices.potencia_Kw')
            ->get();
        return view('comparar', compact('details'));
    }
}