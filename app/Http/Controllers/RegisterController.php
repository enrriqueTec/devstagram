<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Los métodos de los controladores regresarán las vistas
    public function index () 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('name')); //Así se obtiene el valor de un campo

        //Validación 

        $this->validate($request,[
            'name'=>'required|max:30',
            'username'=>'required|unique:users|min:3|max:30',
            'email'=>'required|unique:users|email|max:30',
            'password'=>'required|confirmed|min:6'
        ]);

        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,


        ]);
    }
}
