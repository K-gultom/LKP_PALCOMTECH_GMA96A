<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\serviceController;
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


// Route::get('/', [homeController::class, 'login']);
// Route::post('/', [loginController::class, 'login_proses']);
// Route::get('/register', [loginController::class, 'register']);
// Route::post('/register', [loginController::class, 'register_proses']);

// Route::get('/logout', [loginController::class, 'logout']);




Route::get('/', [homeController::class, 'beranda']);
Route::get('/data/customer', [customerController::class, 'customer']);
Route::get('/add/data/customer', [customerController::class, 'addcustomer']);

Route::get('/data/service', [serviceController::class, 'service']);
Route::get('/add/data/service', [serviceController::class, 'addservice']);
// Route::get('/', [homeController::class, 'beranda']);
// Route::get('/', [homeController::class, 'beranda']);
// Route::get('/', [homeController::class, 'beranda']);
