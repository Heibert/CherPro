<?php

namespace App\Http\Controllers;
/* Heibert */
use Illuminate\Http\Request;
use App\Models\Coordinacion;
use App\Imports\CoordinacionImport;
use App\Http\Requests\CoordinacionCreateRequest;
use App\Http\Requests\CoordinacionEditRequest;
use Illuminate\Support\Facades\validator;
use Maatwebsite\Excel\Facades\Excel;

class CoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['coordinacion']=Coordinacion::paginate();
        return view('coordinacion.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coordinacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoordinacionCreateRequest $request)
    {
        $datosCoordi = $request->except('_token'); 
        Coordinacion::insert($datosCoordi); 
        return redirect('coordinacion')->with("Coordinacion registrada");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $datos['coordinacion']=Coordinacion::paginate();
        return view('coordinacion.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('coordinacion.edit')->with([
            'coordinacion' => Coordinacion::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoordinacionEditRequest $request, $id)
    {
   
        $datosCoordi = $request->except('_token','_method');
        Coordinacion::where('id', '=', $id)->update($datosCoordi);

        return redirect('coordinacion')->with([
            'coordinacion' => Coordinacion::find($id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coordinacion::destroy($id);
        return redirect('coordinacion');
    }

    public function import(Request $request){
        $file = $request->file('file');
        Excel::import(new CoordinacionImport, $file);

        return redirect()->route('coordinacion.index')->with('success','Coordinaciones importadas con exito'); 
    }
}
