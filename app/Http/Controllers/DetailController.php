<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function crear(){
        //$device = DB::select('select * from devices where potencia_Kw = ?', [15]);
        $devices = DB::select('select * from devices');
        $prices = DB::select('select * from prices');
        return view('detail.crear', compact(['devices', 'prices']));
    }
    public function almacenar(Request $request){
        $detai = new Detail();
        $detai->id_us = $request->user()->id;
        $detai->id_de = $request->id_de;
        $detai->id_pr = $request->id_pr;
        $detai->save();
        return redirect(route('home'));
    }
}