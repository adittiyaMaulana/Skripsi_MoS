<?php

namespace App\Http\Controllers\ortu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrangTuaController extends Controller
{
    public function homepage(){
        return view('orangtua.homepage');
    }
}
