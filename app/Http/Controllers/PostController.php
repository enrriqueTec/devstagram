<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');//Antes de redireccionar al index, verificamos si el usuario  está autenticado
    }
    public function index(User $user)
    {
        //De esta manera podemos enviar información de un modelo a la vista
       return view('dashboard',
       ['user'=>$user]);
    }

    public function create()
    {
        //create permite visualizar un formulario o página 
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //Store siempre recibe la variable Request
        //store permite almacenar en la base de datos

        $this->validate($request,[
            'titulo'=>'required|max:255',
            'descripcion'=>'required',
            'imagen'=>'required'
        ]);
    }
}
