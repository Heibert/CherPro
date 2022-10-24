<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ExcusaMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ExcusaCreateRequest;

class EnviarExcusaController extends Controller
{
    //
    public function index(){

        return view('emails.savexcusa');
    }

    public function store(ExcusaCreateRequest $request){

        $correo = new ExcusaMail($request->all());
        Mail::to('cristiancamilo.bravo29@gmail.com')->send($correo);

        return redirect('excusa/create')->with('info', 'Excusa enviada');
    }
}
