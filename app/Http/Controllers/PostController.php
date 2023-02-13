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
        return view('posts.create');
    }
}
