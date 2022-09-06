<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use App\Models\Ficha;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;


class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $datos['aprendiz']=Aprendiz::paginate();
        return view('aprendiz.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fichas = Ficha::all(); 
        return view('aprendiz.create', compact('fichas'));
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
            'nombreAprend' => 'required|min:5|max:16',
            'apelliAprend' => 'required',
            'tipoDoc' => 'required',
            'numDoc' => 'required|numeric',
            'correoMisena' => 'required',
            'correoAprend' => 'required',
            'telefonoAprend' => 'required|numeric',
            'id_ficha' => 'required|numeric'
        ]);

        $datosAprendiz = $request->except('_token'); 
        Aprendiz::insert($datosAprendiz); 
        return redirect('aprendiz')->with("Aprendiz registrado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function show(Aprendiz $aprendiz)
    {
        
        $datos['aprendiz']=Aprendiz::paginate();
        return view('aprendiz.index', $datos);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        return view('aprendiz.edit')->with([
            'aprendiz' => Aprendiz::find($id),
            'fichas' => Ficha::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nombreAprend' => 'required|min:5|max:16',
            'apelliAprend' => 'required',
            'tipoDoc' => 'required',
            'numDoc' => 'required|numeric',
            'correoMisena' => 'required',
            'correoAprend' => 'required',
            'telefonoAprend' => 'required|numeric',
            'id_ficha' => 'required|numeric'
        ]);
        
        $datosAprend = $request->except('_token','_method');
        Aprendiz::where('id', '=', $id)->update($datosAprend);

        return view('aprendiz.edit')->with([
            'aprendiz' => Aprendiz::find($id),
            'fichas' => Ficha::find('id')
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Aprendiz::destroy($id); 
        return redirect('aprendiz');
        
    }
}