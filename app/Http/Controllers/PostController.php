<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');//Antes de redireccionar al index, verificamos si el usuario  está autenticado
    }
    public function index()
    {
       return view('dashboard');
    }
}
