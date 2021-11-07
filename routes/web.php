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
// Route::get('/jadwal', 'ortu\OrangTuaController@');
// Route::get('/finansial', 'ortu\OrangTuaController@');
// Route::get('/berita', 'ortu\OrangTuaController@');
// Route::get('/nilai', 'ortu\OrangTuaController@');
// Route::get('/kehadiran', 'ortu\OrangTuaController@');
// Route::get('/fiturBantuan', 'ortu\OrangTuaController@');
// Route::get('/tentangSekolah', 'ortu\OrangTuaController@');
// Route::get('/pesan', 'ortu\OrangTuaController@');
// Route::get('/pusatBantuan', 'ortu\OrangTuaController@');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
