<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Aquí necesitamos decirle a Laravel que datos son los que el usuario mandará a la BD
    //debe ser la misma que validas en el controlador. se recomienda usar los mismos nombres

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];
}
