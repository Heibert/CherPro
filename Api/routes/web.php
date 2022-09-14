<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\CoordinacionController;
use App\Http\Controllers\ExcusaController;
use App\Http\Controllers\CoordinadorController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\TematicaController;
use App\Http\Controllers\TrimestreController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;

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
/*
Route::get('/', function () {
    return view('index');
});
*/
Route::resource('/index', IndexController::class);
Route::resource('/reporte', ReporteController::class);
Route::delete('/reportes/{id}', [ReporteController::class, 'destroy'])->name('reportes.destroy');
Route::put('reportes/{id}', 'ReportesController@update')->name('reportes.update');

Route::resource('/coordinacion', CoordinacionController::class);
Route::delete('/coordinacion/{id}', [CoordinacionController::class, 'destroy'])->name('coordinacion.destroy');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/excusa/create',[ExcusaController::class,'create']);

Route::resource('excusa',ExcusaController::class);

Route::resource('coordinador',CoordinadorController::class); 

Route::resource('programa',ProgramaController::class);

Route::resource('administrador', AdministradorController::class);
Route::resource('tematica', TematicaController::class);
Route::resource('trimestre', TrimestreController::class);

Route::resource('ficha', FichaController::class);
Route::resource('aprendiz', AprendizController::class);
Route::resource('instructor', InstructorController::class);

//---------------------------------- Login -----------------------------------

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [RegisterController::class, 'create'])->name('login.index');

Route::post('/login', [RegisterController::class, 'store'])->name('login.store');

Route::get('/register', [SessionsController::class, 'create'])->name('register.index');
Route::get('/register', [SessionsController::class, 'create'])->name('register.index');
