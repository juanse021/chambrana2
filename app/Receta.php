<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //
    protected $fillable = [
        'id_producto', 'id_ingrediente', 'cantidad'
    ];

    protected $table = 'recetas';


}
