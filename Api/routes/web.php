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
use App\Http\Controllers\EnviarExcusaController;
use App\Http\Controllers\EnviarReporteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\IInstructorController;
use App\Http\Controllers\Auth\PasswordResetLinkController;


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
//----------------------------- Reporte PDF ----------------------------------------------------------//
Route::get('reporte/pdf', [App\Http\Controllers\ReporteController::class, 'pdf'] )->name('reporte.pdf');

Route::resource('/index', IndexController::class)->middleware('auth');
Route::resource('/reporte', ReporteController::class)->middleware('auth');
Route::resource('/coordinacion', CoordinacionController::class)->middleware('auth.admin');
Route::delete('/coordinacion/{id}', [CoordinacionController::class, 'destroy'])->name('coordinacion.destroy')->middleware('auth');
Route::get('/', function () {
    return view('index');
});

Route::get('/excusa/create',[ExcusaController::class,'create'])->middleware('auth');

Route::resource('excusa',ExcusaController::class)->middleware('auth');

Route::resource('coordinador',CoordinadorController::class)->middleware('auth.admin'); 

Route::resource('programa',ProgramaController::class)->middleware('auth');

Route::resource('administrador', AdministradorController::class)->middleware('auth.admin');
Route::resource('tematica', TematicaController::class)->middleware('auth');
Route::resource('trimestre', TrimestreController::class)->middleware('auth');

Route::resource('ficha', FichaController::class)->middleware('auth');
Route::resource('aprendiz', AprendizController::class)->middleware('auth');
Route::resource('instructor', InstructorController::class)->middleware('auth');
Route::resource('estados', EstadoController::class)->middleware('auth');

//---------------------------------- Login -----------------------------------

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('/index');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/login', [SessionsController::class, 'create'])->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/sesion', [SessionsController::class, 'destroy'])->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth.admin');
Route::get('/instructorSesion', [IInstructorController::class, 'index'])->name('instructor.index')->middleware('auth.instructor');
//------------------------------------ Restablecer ----------------------------

Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
->name('password.request');

Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
->name('password.email');

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
->name('password.reset');


//------------------------------------ Carga masiva ---------------------------

Route::post('aprendiz-import', [AprendizController::class, 'import'])->name('aprendiz.import');
Route::post('coordinacion-import', [CoordinacionController::class, 'import'])->name('coordinacion.import');



//-------------------------------- Excuse mail ---------------------------------------//

Route::get('excusaenv', [EnviarExcusaController::class, 'index'])->name('enviar.index');
Route::post('excusa', [EnviarExcusaController::class, 'store'])->name('enviar.store');

//-------------------------------- Report PDF ---------------------------------------//

