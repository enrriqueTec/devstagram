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

    /**Un usuario puede crear muchos posts pero un posts solo puede tener un autor
     * esa relación se define con el belongsTo
     */

    public function user()
    {
        return $this->belongsTo(User::class)->select(['name','username']);
    }
}
