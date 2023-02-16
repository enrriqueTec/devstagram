<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->except(['show','index']);//Antes de redireccionar al index, verificamos si el usuario  está autenticado
    }
    public function index(User $user)
    {
        //filtramos la información de posts desde la BD
        $posts = Post::where('user_id', $user->id)->paginate(20);

        
        //De esta manera podemos enviar información de un modelo a la vista, en este caso le mandamos el usuario y los posts que ha publicado
       return view('dashboard',
       ['user'=>$user,
        'posts'=>$posts]);
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

        //Forma uno de dar de alta posts y cualquier otro dato 
        //Post::create([
        //'titulo' => $request->titulo,
        //'descripcion' => $request->descripcion,
        //'imagen' => $request->imagen,
        //'user_id' => auth()->user()->id //User id es llave foranea, pero lo tomamos de auth por que el usuario está autenticado
        //]); 

        //Otras formas de dar de alta posts, esta forma es más a la convencion de Laravel
        /**Aquí accedemos directamente a las relaciones creadas en el modelo usuario y posts
         * y con ello damos de alta
         */

        $request->user()->posts()->create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'imagen' => $request->imagen,
        'user_id' => auth()->user()->id
        ]);


        return redirect()->route('posts.index', auth()->user()->username);
    }


    public function show (User $user, Post $post){


        return view('posts.show', [
            'post'=>$post]);
    }
}
