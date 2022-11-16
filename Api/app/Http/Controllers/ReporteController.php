<?php

namespace App\Http\Controllers;
/* Heibert */
use Illuminate\Http\Request;
use App\Models\Instructor;
use PDF;
use App\Models\Coordinador;
use App\Models\Aprendiz;
use App\Models\Reporte;
use App\Http\Requests\ReporteCreateRequest;
use App\Http\Requests\ReporteEditRequest;


class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['reporte']=Reporte::paginate();
        return view('reporte.index', $datos);
    }

    //Generar reporte por pdf ***

    public function pdf( $id)
    {
        $reporte = Reporte::find($id);
        //echo '<pre>';
        //var_dump($reporte->id);
        //echo '</pre>';
       $pdf = PDF::loadView('reporte.pdf', ['reporte'=>$reporte]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apren = Aprendiz::all();
        $inst = Instructor::all();
        $coordi = Coordinador::all();
        return view('reporte.create', compact('inst', 'coordi', 'apren'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReporteCreateRequest $request)
    {
        $datosReporte = $request->except('_token'); 
        Reporte::insert($datosReporte); 
        return redirect('reporte');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        //
        $datos['reporte']=Reporte::paginate();
        return view('reporte.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('reporte.edit')->with([
            'reporte' => Reporte::find($id),
            'inst' => Instructor::all(),
            'coordi' => Coordinador::all(),
            'apren' => Aprendiz::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReporteEditRequest $request, $id)
    {
        $datosReporte = $request->except('_token','_method');
        Reporte::where('id', '=', $id)->update($datosReporte);

        return redirect('reporte')->with([
            'reporte' => Reporte::find($id),
            'inst' => Instructor::find('id'),
            'coordi' => Coordinador::find('id'),
            'apren' => Aprendiz::find('id'),
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
        Reporte::destroy($id);
        return redirect('reporte');   
    }
}
