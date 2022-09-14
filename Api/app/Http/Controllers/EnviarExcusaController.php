<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ExcusaCreateRequest;
use App\Http\Requests\ExcusaEditRequest;

class EnviarExcusaController extends Controller
{
    //
    public function index(){

        return view('emails.Enviar');
    }

    public function store(ExcusaCreateRequest $request){

        $correo = new ContactanosMailable($request->all());
        Mail::to('cristiancamilo.bravo29@gmail.com')->send($correo);

        return redirect('excusa/create')->with('info', 'Excusa enviada');
    }
}
