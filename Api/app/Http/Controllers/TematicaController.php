<?php

namespace App\Http\Controllers;

use App\Models\Tematica;
use App\Models\Instructor;
use App\Models\Ficha;
use App\Models\Programa;
use App\Http\Requests\TematicaCreateRequest;
use App\Http\Requests\TematicaEditRequest;
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
        $datos['tematicas']= Tematica::paginate();
        return view ('Tematica.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $instructors = Instructor::all();
        $programas = Programa::all();
        $fichas = Ficha::all(); 
        return view ('tematica.create', compact('instructors', 'programas', 'fichas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TematicaCreateRequest $request)
    {
        $datosTema = $request->except('_token');
        Tematica::insert($datosTema);
        return redirect('tematica')->with("Tematica registrada");
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
        $datos['tematica']=Tematica::paginate();
        return view('tematica.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tematica  $tematica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tematica.edit')->with([
            'tematica' => Tematica::find($id),
            'instructors' => Instructor::all(),
            'programas' => Programa::all(),
            'fichas' => Ficha::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tematica  $tematica
     * @return \Illuminate\Http\Response
     */
    public function update(TematicaEditRequest $request, $id)
    {
        $datosTema = $request->except('_token','_method');
        Tematica::where('id','=', $id)->update($datosTema);
        
        return redirect('tematica')->with([
            'tematica' => Tematica::find($id),
            'instructor' => Instructor::find('id'),
            'programa' => Programa::find('id'),
            'ficha' => Ficha::find('id')
        ]);

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
