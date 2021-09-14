<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\AlergiaPacienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\SatisfaccionController;
use App\Http\Controllers\CuentaTotalController ;





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

Route::get('/', function () {
    return view('auth.login');
});




Route::resource('paciente',PacienteController::class)->middleware('auth');
Route::resource('cita',CitaController::class)->middleware('auth');
Route::resource('cuenta',CuentaController::class)->middleware('auth');
Route::resource('alergia',AlergiaPacienteController::class)->middleware('auth');
Route::resource('dashboard',DashboardController::class)->middleware('auth');
Route::resource('historial',HistorialController::class)->middleware('auth');
Route::resource('satisfaccion',SatisfaccionController::class)->middleware('auth');
Route::resource('cuentaTotal',CuentaTotalController::class)->middleware('auth');
Route::get('historial/{id}',  [HistorialController::class, 'historial'])->middleware('auth');
Route::get('alergia/{id}',  [AlergiaPacienteController::class, 'alergia'])->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);



Route::get('home',[HomeController::class, 'index'])->middleware('auth');



