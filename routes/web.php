<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Loginnn
// Route::get('/login', 'LoginLogoutController@Login');

// Ortu
Route::get('/homepage', 'ortu\OrangTuaController@homepage');
Route::get('/jadwalKelas', 'ortu\OrangTuaController@jadwalKelas');
Route::get('/jadwalNonAkademik', 'ortu\OrangTuaController@jadwalNonAkademik');
Route::get('/finansial', 'ortu\OrangTuaController@finansial');
Route::get('/berita', 'ortu\OrangTuaController@berita');
Route::get('/nilai', 'ortu\OrangTuaController@nilai');
Route::get('/kehadiran', 'ortu\OrangTuaController@kehadiran');
Route::get('/fiturBantuan', 'ortu\OrangTuaController@fiturBantuan');
Route::get('/tentangSekolah', 'ortu\OrangTuaController@tentangSekolah');
Route::get('/pesan', 'ortu\OrangTuaController@pesan');
Route::get('/pusatBantuan', 'ortu\OrangTuaController@pusatBantuan');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
