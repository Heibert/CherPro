<?php

namespace App\Http\Controllers;

use App\Models\Trimestre;
use App\Models\Ficha;
use App\Models\Tematica;
use App\Http\Requests\TrimestreCreateRequest;
use App\Http\Requests\TrimestreEditRequest;
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
        $datos['trimestre']=Trimestre::paginate();
        return view('trimestre.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fichas = Ficha::all();
        $tematica = Tematica::all();
        $tematica2 = Tematica::all();
        return view('trimestre.create', compact('fichas', 'tematica', 'tematica2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrimestreCreateRequest $request)
    {
        $datosTrimes = $request->except('_token');
        Trimestre::insert($datosTrimes);
        return redirect('trimestre')->with("Trimestre registrado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trimestre  $trimestre
     * @return \Illuminate\Http\Response
     */
    public function show(Trimestre $trimestre)
    {
        
        $datos['trimestre']=Trimestre::paginate();
        return view('trimestre.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trimestre  $trimestre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('trimestre.edit')->with([
            'trimestres' => Trimestre::find($id),
            'fichas' => Ficha::all(),
            'tematica' => Tematica::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trimestre  $trimestre
     * @return \Illuminate\Http\Response
     */
    public function update(TrimestreEditRequest $request, $id)
    {
        $datosTrimes = $request->except('_token','_method');
        Trimestre::where('id','=', $id)->update($datosTrimes);

        return redirect('trimestre')->with([
            'trimestres' => Trimestre::find($id),
            'fichas' => Ficha::find('id'),
            'tematica' => Tematica::find('id')
        ]);
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
