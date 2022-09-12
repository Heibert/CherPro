<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Coordinacion;
use App\Http\Requests\ProgramaCreateRequest;
use App\Http\Requests\ProgramaEditRequest;
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
        $datos['programa']= Programa::paginate();
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
        $coordinacion = Coordinacion::all();
        return view('programa.create', compact('coordinacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramaCreateRequest $request)
    {
        $datosPrograma = $request->except('_token');
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
        $datos['programa']=Programa::paginate();
        return view('programa.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('programa.edit')->with([
            'programa' => Programa::find($id),
            'coordinacion' => Coordinacion::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramaEditRequest $request, $id)
    {
        $datosPrograma = $request->except(['_token','_method']);
        Programa::where('id', '=', $id)->update($datosPrograma);

        return redirect('programa')->with([
            'programa' => Programa::find($id),
            'coordinacion' => Coordinacion::find('id')
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Programa::destroy($id);
        return redirect('programa');
    }
}
