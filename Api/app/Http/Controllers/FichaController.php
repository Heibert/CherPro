<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Instructor;
use App\Models\Programa;
use App\Http\Requests\FichaCreateRequest;
use App\Http\Requests\FichaEditRequest;
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
        $programas = Programa::all();
        $instructors = Instructor::all();
        return view('ficha.create', compact('instructors', 'programas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FichaCreateRequest $request)
    {

        $datosFicha = $request->except('_token'); 
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
        return view('ficha.index', $datos);
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
            'instructors' => Instructor::all(),
            'programas' => Programa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(FichaEditRequest $request, $id)
    {

        $datosFicha = $request->except('_token','_method');
        Ficha::where('id', '=', $id)->update($datosFicha);

        return redirect('ficha')->with([
            'ficha' => Ficha::find($id),
            'instructors' => Instructor::find('id'),
            'programas' => Programa::find('id')
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