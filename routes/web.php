<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\TematicaController;
use App\Http\Controllers\TrimestreController;
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

/*Route::get('/administrador', function () {
    return view('Administrador.index');
});

Route::get('/administrador/create',[AdministradorController::class,'create']);
*/
Route::resource('administrador', AdministradorController::class);
Route::resource('tematica', TematicaController::class);
Route::resource('trimestre', TrimestreController::class);



