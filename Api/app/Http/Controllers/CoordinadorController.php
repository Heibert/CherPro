<?php

namespace App\Http\Controllers;

use App\Models\Coordinador;
use Illuminate\Http\Request;

use App\Models\Coordinacion;


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

        $coordinaciones = Coordinacion::all();
        return view('coordinador.create', compact('coordinaciones'));

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

        $request->validate([
            'nomCoordinador' => 'required|min:5|max:16',
            'apeCoordinador' => 'required',
            'tipoDoc' => 'required',
            'numDoc' => 'required|numeric',
            'correoMisena' => 'required',
            'telefonoCoordinador' => 'required|numeric',
            'id_coordinacion' => 'required|numeric'
        ]);

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
        return view('coordinador.edit')
               ->with(['coordinador' => Coordinador::find($id),'coordinacions' => Coordinacion::all()]); 
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

        $request->validate([
            'nomCoordinador' => 'required|min:5|max:16',
            'apeCoordinador' => 'required',
            'tipoDoc' => 'required',
            'numDoc' => 'required|numeric',
            'correoMisena' => 'required|email:rfc,dns',
            'telefonoCoordinador' => 'required|numeric',
            'id_coordinacion' => 'required|numeric'
        ]);


        $datosCoordinador = request()->except(['_token','_method']);
        Coordinador::where('id','=',$id)->update($datosCoordinador);

        return view('coordinador.edit')->with(['coordinador' => Coordinador::find($id),
            'coordinacions' => Coordinacion::find('id')
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
