<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|min:5|max:16',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required| email| unique:Users',
            'password' => 'required |confirmed|min:5|max:16',
            'password_confirmation' => 'required|min:5|max:16'
        ]);

        $admin = User::create(request(['name','apellido','telefono','email','password','password_confirmation']));
        auth()->login($admin);
        return redirect()->to('/index');
    }

    
}
