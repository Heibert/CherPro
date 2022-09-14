<?php

namespace App\Http\Controllers;

use App\Models\Coordinador;
use App\Http\Requests\CoordinadorCreateRequest;
use App\Http\Requests\CoordinadorEditRequest;
use App\Models\Coordinacion;
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
        $datos['coordinadors']= Coordinador::paginate();
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

        $coordinaciones = Coordinacion::all();
        return view('coordinador.create', compact('coordinaciones'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoordinadorCreateRequest $request)
    {
        $datosCoordinador = $request->except('_token');
        Coordinador::insert($datosCoordinador);
        return redirect('coordinador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinador $coordinador)
    {
        $datos['coordinadors']= Coordinador::paginate();
        return view('coordinador.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('coordinador.edit')->with([
            'coordinador' => Coordinador::find($id),
            'coordinacion' => Coordinacion::all()
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function update(CoordinadorEditRequest $request, $id)
    {
        $datosCoordinador = request()->except(['_token','_method']);
        Coordinador::where('id','=',$id)->update($datosCoordinador);

        return redirect('coordinador')->with([
            'coordinador' => Coordinador::find($id),
            'coordinacion' => Coordinacion::find('id')
        ]); 
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
