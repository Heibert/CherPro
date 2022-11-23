<?php
/* Heibert */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tematica;
use App\Models\Aprendiz;
use App\Models\Asistencia;
use App\Models\Ficha;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AsistenciaController extends Controller
{/* Borrar */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias = DB::table('asistencias')->get();
        $fichaDesc = DB::table('asistencias')
            ->join('aprendices', 'asistencias.id_aprendiz', '=', 'aprendices.id')
            ->join('fichas', 'fichas.id', '=', 'aprendices.id_ficha')
            ->orderBy('asistencias.id', 'desc')->get();
        $busqueda = DB::table('asistencias')
            ->join('aprendices', 'asistencias.id_aprendiz', '=', 'aprendices.id')
            ->join('fichas', 'fichas.id', '=', 'aprendices.id_ficha')
            ->join('tematicas','tematicas.id','=', 'asistencias.id_tematica')->get();
        $fichas = DB::table('fichas')->get();
        return  array($busqueda, $asistencias,$fichaDesc,$fichas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendices = Aprendiz::all();
        $tematicas = Tematica::all();
        $fichas = Ficha::all();
        return array($tematicas, $aprendices, $fichas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fechaAsistencia' => 'bail|required|Date',
            'id_tematica' => 'bail|required|numeric',
            'id_ficha' => 'bail|required|numeric'
        ]);
        $aprendices = DB::table('aprendices')->where('id_ficha','=',$request->id_ficha)->pluck('id');
        $nAprendices = DB::table('fichas')->where('id','=',$request->id_ficha)->value("cantAprendiz");
        for ($i=0; $i < count($aprendices); $i++) {
            $asistencia = new Asistencia;
            $asistencia->fechaAsistencia = $request->fechaAsistencia;
            $asistencia->estadoAsistencia = "A";
            $asistencia->id_aprendiz = $aprendices[$i];
            $asistencia->id_tematica = $request->id_tematica;
            $asistencia->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(['estadoAsistencia' => 'size:1|starts_with:A,F,R,E']);
        $Asistencia = Asistencia::find($id);
        if ($request->estadoAsistencia) {
            $Asistencia->estadoAsistencia = $request->estadoAsistencia;
        }
        $Asistencia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asistencia = Asistencia::findOrFail($id);
        $asistencia->delete();
        return redirect()->action([AsistenciaController::class, 'index']);
    }
}