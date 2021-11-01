<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginLogoutController extends Controller
{
    public function Login(){
        return view('login');
    }
}
