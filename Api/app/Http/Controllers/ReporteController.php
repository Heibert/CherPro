<?php

namespace App\Http\Controllers;
/* Heibert */
use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Reporte;
use Illuminate\Support\Facades\validator;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportes = Reporte::all();
        return view('reportes.index',['reportes'=>$reportes]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructores = Instructor::all();
        return view('reportes.registro')
            ->with('instructores',$instructores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            "instructor"=>"required|numeric",
            "coordinador"=>"required|numeric",
            "fecha"=>"required|date"
        ];
        $mensajes = [
            "required" => "Debes llenar el campo"
        ];
        $validation = Validator::make($request->all(),$reglas,$mensajes);
        if ($validation->fails()) {
            return redirect('reporte/create')
            ->withErrors($validation)
            ->withInput();
        }
        else {
            $reporte = new Reporte;
            $reporte->idInstructor = $request->instructor;
            $reporte->idCoordinador = $request->coordinador;
            $reporte->fechaReporte = $request->fecha;
            $reporte->save();
            return redirect('reporte/create')
            ->with('mensaje','Reporte guardado');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reporte = Reporte::findOrFail($id);
        $instructores = Instructor::all();
        return view ('reportes.edit')
        ->with('instructores',$instructores)
        ->with('reportes',$reporte);
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
        $reglas = [
            "instructor"=>"required|numeric",
            "coordinador"=>"required|numeric",
            "fecha"=>"required|date"
        ];
        $mensajes = [
            "required" => "Debes llenar el campo"
        ];
        $validation = Validator::make($request->all(),$reglas,$mensajes);
        if ($validation->fails()) {
            return redirect('reporte.edit',$id)
            ->withErrors($validation)
            ->withInput();
        }
        else {
            $reporte = Reporte::findOrFail($id);
            $reporte->idInstructor = $request->instructor;
            $reporte->idCoordinador = $request->coordinador;
            $reporte->fechaReporte = $request->fecha;
            $reporte->save();
            return redirect('reporte')
            ->with('mensaje','Reporte actualizado');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reporte = Reporte::findOrFail($id);
        $reporte->delete();
        return redirect()->action([ReporteController::class, 'index']);
    }
}
