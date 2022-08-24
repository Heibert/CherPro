<?php

namespace App\Http\Controllers;

use App\Models\Excusa;
use Illuminate\Http\Request;

class ExcusaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['excusas']= Excusa::paginate();
        return view('excusa.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('excusa.create');
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
        $datosExcusa = request()->except('_token');
        Excusa::insert($datosExcusa );
        
        return redirect('excusa')->with('mensaje','Excusa agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Excusa  $excusa
     * @return \Illuminate\Http\Response
     */
    public function show(Excusa $excusa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Excusa  $excusa
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $excusa=Excusa::findOrFail($id);
        return view('excusa.edit', compact('excusa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Excusa  $excusa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosExcusa = request()->except(['_token','_method']);
        Excusa::where('id','=',$id)->update($datosExcusa);

        $excusa=Excusa::findOrFail($id);
        return view('excusa.edit', compact('excusa'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Excusa  $excusa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Excusa::destroy($id);
        return redirect('excusa');
    }
}
