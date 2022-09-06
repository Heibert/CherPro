<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['instructor']=Instructor::paginate(); 
        return view('instructor.index', $datos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('instructor.create');
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
            'nombreInst' => 'required|min:5|max:16',
            'apellidoInst' => 'required',
            'tipoDoc' => 'required',
            'numDoc' => 'required|numeric',
            'correoMisena' => 'required',
            'telefonoInst' => 'required|numeric',
            'idTematica' => 'required|numeric',
            'idPrograma' => 'required|numeric'
        ]);

        //
        $datosInst = $request->except('_token'); 
        Instructor::insert($datosInst);
        return redirect('instructor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        //
        $datos['instructor']=Instructor::paginate();
        return view('instructor.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $instructor = Instructor::findOrFail($id); 
        return view('instructor.edit', compact('instructor')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombreInst' => 'required|min:5|max:16',
            'apellidoInst' => 'required',
            'tipoDoc' => 'required',
            'numDoc' => 'required|numeric',
            'correoMisena' => 'required',
            'telefonoInst' => 'required|numeric',
            'idTematica' => 'required|numeric',
            'idPrograma' => 'required|numeric'
        ]);

        //
        $datosInst = $request->except('_token','_method'); 
        Instructor::where('id', '=', $id)->update($datosInst);

        $instructor = Instructor::findOrFail($id); 
        return view('instructor.edit', compact('instructor'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Instructor::destroy($id); 
        return redirect('instructor'); 
    }
}