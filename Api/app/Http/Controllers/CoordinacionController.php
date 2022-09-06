<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\Coordinacion;
use Illuminate\Support\Facades\validator;

class CoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinacions = Coordinacion::all();
        return view('coordinacion.index',['coordinacions'=>$coordinacions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programas = Programa::all();
        return view('coordinacion.registro')
            ->with('programas',$programas);
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
            "idPrograma"=>"required|numeric",
            "nomCoordinacion"=>"required|string",
        ];
        $mensajes = [
            "required" => "Debes llenar el campo"
        ];
        $validation = Validator::make($request->all(),$reglas,$mensajes);
        if ($validation->fails()) {
            return redirect('coordinacion/create')
            ->withErrors($validation)
            ->withInput();
        }
        else {
            $coordinacion = new Coordinacion;
            $coordinacion->nomCoordinacion = $request->nomCoordinacion;
            $coordinacion->idPrograma = $request->idPrograma;
            $coordinacion->save();
            return redirect('coordinacion/create')
            ->with('mensaje','coordinacion guardada');
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
        $coordinacion = Coordinacion::findOrFail($id);
        $coordinacion->delete();
        return redirect()->action([CoordinacionController::class, 'index']);
    }
}
