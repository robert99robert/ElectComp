<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function __invoke()
    {
        //$user = User::find($id);
        return view('home');
    }
}
