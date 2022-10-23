<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['estados']=Estado::paginate();
        return view('cestado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cestado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEstado = $request->except('_token'); 
        Estado::insert($datosEstado); 
        return redirect('estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estado  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        $datos['estados']=Estado::paginate();
        return view('cestado.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estado $cv
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        return view('cestado.edit')->with([
            'estados' => Estado::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estado  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEstado = $request->except('_token','_method');
        Estado::where('id', '=', $id)->update($datosEstado);
        return redirect('estados')->with([
            'estados' => Estado::find($id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estado  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estado::destroy($id);
        return redirect('estados');
    }
}
