<?php

namespace App\Http\Controllers;

use App\Models\Coordinador;
use Illuminate\Http\Request;

class CoordinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['coordinadores']= Coordinador::paginate();
        return view('coordinador.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('coordinador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosCoordinador = request()->except('_token');
        Coordinador::insert($datosCoordinador );
        
        return redirect('coordinador')->with('mensaje','coordinador agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinador $coordinador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $coordinador=Coordinador::findOrFail($id);
        return view('coordinador.edit', compact('coordinador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCoordinador = request()->except(['_token','_method']);
        Coordinador::where('id','=',$id)->update($datosCoordinador);

        $coordinador=Coordinador::findOrFail($id);
        return view('coordinador.edit', compact('coordinador'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        coordinador::destroy($id);
        return redirect('coordinador');
    }
}
