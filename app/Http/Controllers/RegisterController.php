<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Los métodos de los controladores regresarán las vistas
    public function index () {
        return view('auth.register');
    }
}
