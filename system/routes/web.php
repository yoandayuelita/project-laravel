<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;



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
Route::get('/', function(){
	return view('welcome');
});


Route::get('index', [ClientController::class, 'index']);
Route::get('client/{client}', [ClientController::class, 'show']);


Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'store']);


Route::prefix('admin')->group(function(){
	Route::resource('beranda', HomeController::class);
	Route::resource('kategori', KategoriController::class);
	Route::resource('produk', ProdukController::class);
	Route::resource('user', UserController::class);
});


