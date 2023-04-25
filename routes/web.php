<?php

use App\Http\Controllers\Admins;
use App\Http\Controllers\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\clientes;
use App\Http\Controllers\Controller;
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

Route::get('/',[AuthController::class, 'login'])->name('auth-login');
Route::get('/usuarioNuevo',[AuthController::class,'agregarNuevo']);
route::post('/logear', [AuthController::class, 'logear'])->name('logear'); 
route::get('/logout', [AuthController::class, 'logout'])->name('logout'); 
Route::get('/inicio',[clientes::class, 'index'])->name('inicio');
