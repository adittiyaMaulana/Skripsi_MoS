<?php

namespace App\Http\Controllers\ortu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrangTuaController extends Controller
{
    public function homepage(){
        return view('orangtua.homepage');
    }

    public function jadwalKelas()
    {
        return view('orangtua.jadwalKelas');
    }

    public function jadwalNonAkademik()
    {
        return view('orangtua.jadwalNonAkademik');
    }

    public function finansial()
    {
        return view('orangtua.finansial');
    }

    public function berita()
    {
        return view('orangtua.berita');
    }

    public function nilai()
    {
        return view('orangtua.nilai');
    }

    public function kehadiran()
    {
        return view('orangtua.kehadiran');
    }

    public function fiturBantuan()
    {
        return view('orangtua.fiturBantuan');
    }

    public function tentangSekolah()
    {
        return view('orangtua.tentangSekolah');
    }

    public function pesan()
    {
        return view('orangtua.pesan');
    }

    public function pusatbantuan()
    {
        return view('orangtua.pusatBantuan');
    }
}
