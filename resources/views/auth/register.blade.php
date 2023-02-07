@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')

<div class="md:flex md:justify-center md:gap-10 md:items-center p-5">
    <div class="md:w-4/12 ">
       <img src="{{asset('img/registrar.jpg')}}" alt="imagen registro de usuarios">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form action="">
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input 
                id="name"
                name="name"
                type="text"
                placeholder="Tu nombre"
                class="border p-3 w-full rounded"
                />
            </div>
            
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                  Username
                </label>
                <input 
                id="username"
                name="username"
                type="text"
                placeholder="Tu nombre de usuario"
                class="border p-3 w-full rounded"
                />
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                  email
                </label>
                <input 
                id="email"
                name="email"
                type="text"
                placeholder="Tu email de registro"
                class="border p-3 w-full rounded"
                />
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                  Password
                </label>
                <input 
                id="password"
                name="password"
                type="password"
                placeholder="Password de registro"
                class="border p-3 w-full rounded"
                />
            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                  Repetir Password
                </label>
                <input 
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                placeholder="Repite tu password"
                class="border p-3 w-full rounded"
                />
            </div>

            <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>

</div>
    
@endsection