<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Instructor;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['ficha']=Ficha::paginate();
        return view('ficha.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $instructors = Instructor::all();
        return view('ficha.create', compact('instructors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'numFicha' => 'required|numeric',
            'cantAprendiz' => 'required|numeric',
            'id_instructor' => 'required',
            'idPrograma' => 'required',
        ]);

        $datosFicha = request()->except('_token'); 
        Ficha::insert($datosFicha); 
        return redirect('ficha');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        //
        $datos['ficha']=Ficha::paginate();
        return view('instructor.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        return view('ficha.edit')->with([
            'ficha' => Ficha::find($id),
            'instructors' => Instructor::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'numFicha' => 'required|numeric',
            'cantAprendiz' => 'required|numeric',
            'id_instructor' => 'required',
            'idPrograma' => 'required',
        ]);
        //
        $datosFicha = request()->except('_token','_method');
        Ficha::where('id', '=', $id)->update($datosFicha);

        return view('ficha.edit')->with([
            'ficha' => Ficha::find($id),
            'instructors' => Instructor::find('id')
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Ficha::destroy($id);
        return redirect('ficha');
    }
}