<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['programas']= Programa::paginate();
        return view('programa.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('programa.create');
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
            'nombrePrograma' => 'required|min:5|max:16',
        ]);

        $datosPrograma = request()->except('_token');
        Programa::insert($datosPrograma );
        
        return redirect('programa')->with('mensaje','Programa agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $programa=Programa::findOrFail($id);
        return view('programa.edit', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'nombrePrograma' => 'required|min:5|max:16',
        ]);


        $datosPrograma = request()->except(['_token','_method']);
        Programa::where('id','=',$id)->update($datosPrograma);

        $programa=Programa::findOrFail($id);
        return view('programa.edit', compact('programa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        Programa::destroy($id);
        return redirect('programa');
    }
}
