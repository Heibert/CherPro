<?php

namespace App\Http\Controllers;

use App\Models\Tematica;
use Illuminate\Http\Request;

class TematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['tematicas']= Tematica::paginate(5);
        return view ('Tematica.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Tematica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosTema = request()->except('_token');
        Tematica::insert($datosTema);
        return response()->json($datosTema);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tematica  $tematica
     * @return \Illuminate\Http\Response
     */
    public function show(Tematica $tematica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tematica  $tematica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tematica=Tematica::findOrFail($id);
        return view ('Tematica.edit', compact('tematica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tematica  $tematica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tematica $tematica)
    {
        $datosTema = request()->except('_token','_method');
        Tematica::where('idTematica','=','$idTematica')->update($datosTema);
        $tematica=Tematica::findOrFail($id);
        return view ('Tematica.edit', compact('tematica'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tematica  $tematica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tematica::destroy($id);
        return redirect('tematica');
    }
}
