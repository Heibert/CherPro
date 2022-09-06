<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Programa;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['administradors']= Administrador::paginate();
        return view ('administrador.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programa = Programa::all();
        return view ('administrador.create', compact('programas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosAdmin = request()->all();
        $datosAdmin = $request()->except('_token');
        Administrador::insert($datosAdmin);
        return redirect('administrador')->with("Admin registrado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        //
        $datos['administradors']=Administrador::paginate();
        return view('administrador.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('administrador.edit')->with([
            'administradors' => Administrador::find($id),
            'programas' => Programas::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosAdmin = $request()->except('_token','_method');
        Administrador::where('id','=',$id)->update($datosAdmin);
        
        return view('administrador.edit')->with([
            'administradors' => Administrador::find($id),
            'programas' => Programas::all('id')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Administrador::destroy($id);
        return redirect('administrador');
    }
}
