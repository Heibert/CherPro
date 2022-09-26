<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller {

    public function create(){
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {
        //
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo o la contraseña es incorrecto'
            ]);
        } else{
            if(auth()->user()->rol == 'admin'){
                return redirect()->route('admin.index');
            } else{
                return redirect()->to('/index');
            }
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
    
