<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\CoordinacionController;
use App\Http\Controllers\AsistenciaController;
use App\Models\Reporte;

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
    return view('welcome');
});
Route::resource('/asistencia', AsistenciaController::class);

Route::resource('/reporte', ReporteController::class);
Route::delete('/reportes/{id}', [ReporteController::class, 'destroy'])->name('reportes.destroy');
Route::put('reportes/{id}', 'ReportesController@update')->name('reportes.update');

Route::resource('/coordinacion', CoordinacionController::class);
Route::delete('/coordinacion/{id}', [CoordinacionController::class, 'destroy'])->name('coordinacion.destroy');