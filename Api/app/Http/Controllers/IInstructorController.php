<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IInstructorController extends Controller
{
    public function index() {
        return view('roles.instructor.index');
    }
}
