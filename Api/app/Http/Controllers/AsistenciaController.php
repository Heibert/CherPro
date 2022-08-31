<?php
/* Heibert */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tematica;
use App\Models\Aprendiz;
use App\Models\Asistencia;
use Illuminate\Support\Facades\validator;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*         $asistencias = Asistencia::all(); */
        $asistencias = Aprendiz::join("Asistencias","Asistencias.idAprendiz", "=", "Aprendices.id")
            ->select("*")
            ->get();
        return $asistencias;
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
        return array($tematicas, $aprendices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*         $reglas = [
            "fechaAsistencia"=>"required|date",
            "idAprendiz"=>"required|numeric",
            "idTematica"=>"required|numeric",
        ];
        $mensajes = [
            "required" => "Debes llenar el campo"
        ];
        $validation = Validator::make($request->all(),$reglas,$mensajes);
        if ($validation->fails()) {
            return redirect('asistencia/create')
            ->withErrors($validation)
            ->withInput();
        }
        else { */
            $asistencia = new Asistencia;
            $asistencia->fechaAsistencia = $request->fechaAsistencia;
            $asistencia->estadoAsistencia = $request->estadoAsistencia;
            $asistencia->idAprendiz = $request->idAprendiz;
            $asistencia->idTematica = $request->idTematica;
            $asistencia->save();
            return $asistencia; 
            /* redirect('asistencia/create')
            ->with('mensaje','asistencia guardada'); */
        /* } */
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
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
