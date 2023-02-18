<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
