<?php

namespace App\Http\Controllers;

use App\Models\Trimestre;
use Illuminate\Http\Request;

class TrimestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['trimestres']= Trimestre::paginate(5);
        return view ('Trimestre.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trimestre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosTrimes = request()->except('_token');
        Trimestre::insert($datosTrimes);
        return response()->json($datosTrimes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trimestre  $trimestre
     * @return \Illuminate\Http\Response
     */
    public function show(Trimestre $trimestre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trimestre  $trimestre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trimestre=Trimestre::findOrFail($id);
        return view ('Trimestre.edit', compact('trimestre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trimestre  $trimestre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trimestre $trimestre)
    {
        $datosTrimes = request()->except('_token','_method');
        Trimestre::where('idTrimestre','=','$idTrimestre')->update($datosTrimes);
        $trimestre=Trimestre::findOrFail($id);
        return view ('Trimestre.edit', compact('trimestre'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trimestre  $trimestre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trimestre::destroy($id);
        return redirect('trimestre');
    }
}
