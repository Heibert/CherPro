<?php

namespace App\Http\Controllers;
use App\Models\Excusa;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Requests\ExcusaCreateRequest;
use App\Http\Requests\ExcusaEditRequest;

class ExcusaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $instruc = Instructor::all();
        return view('excusa.create', compact('instruc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExcusaCreateRequest $request)
    {
        $datosExcusa = $request->except('_token');
        Excusa::insert($datosExcusa);
        return redirect('excusa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Excusa  $excusa
     * @return \Illuminate\Http\Response
     */
    public function show(Excusa $excusa)
    {
        $datos['excusas']= Excusa::paginate();
        return view('excusa.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Excusa  $excusa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // No se puede editar una excusa
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Excusa  $excusa
     * @return \Illuminate\Http\Response
     */
    public function update($request)
    {
        //No se puede mirar una excusa
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Excusa  $excusa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Excusa::destroy($id);
        return redirect('excusa');
    }
}
