<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserCreateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['user']=User::paginate();
        return view('user.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    public function store(UserCreateRequest $request)
    {
        $datosUser = $request->except('_token');
        User::insert($datosUser); 
        return redirect('user');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user');
    }
    
}
