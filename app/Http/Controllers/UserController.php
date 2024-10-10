<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AlmacenarUser;
use App\Http\Requests\ActualizarDevice;

class UserController extends Controller
{
    public function crear(){
        return view('user.crear');
    }
    public function almacenar(AlmacenarUser $request){
        $user = User::create($request->all());
        return redirect()->route('home');
    }
}