<?php

namespace App\Http\Controllers\ortu;

use Illuminate\Http\Request;

class OrangTuaController extends Controller
{
    public function homepage(){
        return view('orangtua.homepage');
    }
}
