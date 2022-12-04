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
        $reporte = null;
        for ($i=0; $i < count($asistencias); $i++) { 
            if ($asistencias[$i]->estadoAsistencia == "F") {
                $idAprendiz = $asistencias[$i]->id_aprendiz;
                $fallas = 0;
                for ($j=0; $j < count($asistencias); $j++) { 
                    if ($asistencias[$j]->estadoAsistencia == "F") {
                        if ($idAprendiz == $asistencias[$j]->id_aprendiz) {
                            $fallas++;
                            if ($fallas >= 3) {
                                $reporte[0] = $idAprendiz;
                                $reporte[1] = $fallas;
                            }
                        }
                    }
                    
                }
            }
        }
        if ($reporte != null) {
            $aprendices = DB::table('aprendices')->where('id', '=', $reporte[0])->select('nombreAprend', 'apelliAprend')->first();
        }
        else {
            $aprendices = "Ningun aprendiz reportado";
        }
        $BD1 = DB::table('fichas')
        ->join('aprendices', 'id_ficha', '=', 'fichas.id')
        ->join('asistencias', 'asistencias.id_aprendiz', '=', 'aprendices.id')
        ->orderBy('asistencias.id', 'asc')->where('aprendices.id_ficha', '=', '1')->get();
        $BD2 = DB::table('fichas')
        ->join('aprendices', 'id_ficha', '=', 'fichas.id')
        ->join('asistencias', 'asistencias.id_aprendiz', '=', 'aprendices.id')
        ->orderBy('asistencias.id', 'asc')->where('aprendices.id_ficha', '=', '2')->get();
        $BD3 = DB::table('fichas')
        ->join('aprendices', 'id_ficha', '=', 'fichas.id')
        ->join('asistencias', 'asistencias.id_aprendiz', '=', 'aprendices.id')
        ->orderBy('asistencias.id', 'asc')->where('aprendices.id_ficha', '=', '3')->get();
        $fichaDesc = DB::table('asistencias')
            ->join('aprendices', 'asistencias.id_aprendiz', '=', 'aprendices.id')
            ->join('fichas', 'fichas.id', '=', 'aprendices.id_ficha')
            ->orderBy('asistencias.id', 'asc')->get();
        $busqueda = DB::table('asistencias')
            ->join('aprendices', 'asistencias.id_aprendiz', '=', 'aprendices.id')
            ->join('fichas', 'fichas.id', '=', 'aprendices.id_ficha')
            ->join('tematicas','tematicas.id','=', 'asistencias.id_tematica')->get();
        $fichas = DB::table('fichas')->get();
        return  array($busqueda, $asistencias, $fichaDesc, $fichas, $BD1, $BD2, $BD3, $reporte, $aprendices);
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