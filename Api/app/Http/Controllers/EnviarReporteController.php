<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ReporteCreateRequest;
use App\Mail\ReporteMail;

class EnviarReporteController extends Controller
{
    //
    public function index(){

        return view('emails.savereport');
    }

    public function store(ReporteCreateRequest $request){

        $correo = new ReporteMail($request->all());
        Mail::to('cristiancamilo.bravo29@gmail.com')->send($correo);

        return redirect('reporte/create')->with('info', 'Reporte enviado correctamente');    
    }
}
