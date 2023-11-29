<?php

use Illuminate\Support\Facades\Route;
// use controller
use App\Http\Controllers\Controller_satu;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\loopingController;
use App\Http\Controllers\matematikaController;
use App\Http\Controllers\catatanController;

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
//     return view('kiel');
// });


Route::get('/', [Controller_satu::class, 'beranda']);
Route::get('/tentangkami', [Controller_satu::class, 'tentangKami']);
Route::get('/program', [Controller_satu::class, 'program']);



Route::get('/routing', [Controller_satu::class, 'index']);
Route::get('/kiel', [Controller_satu::class, 'kiel']);


// Routing Matematika
Route::get('/persegipanjang', [matematikaController::class, 'persegipanjang']);
Route::post('/persegipanjang', [matematikaController::class, 'persegipanjang_hitung']);

//kalkulator
Route::get('/kalkulator', [matematikaController::class, 'kalkulator']);
Route::post('/kalkulator', [matematikaController::class, 'kalkulator_hitung']);

//looping1
Route::get('/looping1', [loopingController::class, 'looping1']);
Route::post('/looping1', [loopingController::class, 'looping1_hitung']);

//looping2
Route::get('/looping2', [loopingController::class, 'looping2']);
Route::post('/looping2', [loopingController::class, 'looping2_hitung']);



//Aplikasi Penjadwalan
Route::get('/jadwal', [jadwalController::class, 'index']);
Route::post('/jadwal', [jadwalController::class, 'index']);

Route::get('/jadwal/edit/{id}', [jadwalController::class, 'edit']);
Route::post('/jadwal/edit/{id}', [jadwalController::class, 'edit_proses']);

Route::get('/jadwal/add', [jadwalController::class, 'addJadwal']);
Route::post('/jadwal/add', [jadwalController::class, 'addJadwal_Proses']);

Route::get('/jadwal/delete/{id}', [jadwalController::class, 'delete']);



// Aplikasi Catatan
Route::get('/catatan', [catatanController::class, 'index']);
Route::get('/catatan/add', [catatanController::class, 'add']);
Route::get('/catatan/edit', [catatanController::class, 'edit']);
Route::get('/catatan/view', [catatanController::class, 'view']);