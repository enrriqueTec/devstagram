<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

/*En esta parte importamos el controlador, definimos que es una clase y le pasamos el método*/
//le asignamos un nombre a la ruta y laravel sabrá a que vista llamar
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',[logoutController::class,'store'])->name('logout');

//Para crear una ruta en variable, se agrega {{}}
/*Esto lo vamos a utilizar para mandar el nombre del usuario a la URL
y como en el proyecto ya tenemos un modelo llamado user, es por eso que se
puede utilizar*/
Route::get('/{user:username}',[PostController::class,'index'])->name('posts.index');


Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');//ruta para crear un post
Route::post('/posts',[PostController::class,'store'])->name('posts.store');//ruta para almacenar posts
Route::get('/{user:username}/posts/{post}',[PostController::class,'show'])->name('posts.show');//ruta para mostrar detalles de los posts publicados

Route::post('/{user:username}/posts/{post}',[ComentarioController::class,'store'])->name('comentarios.store');//ruta para mostrar detalles de los posts publicados

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');


