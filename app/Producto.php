<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable = [
        'nombre', 'precio'
    ];

    protected $table = 'productos';

    public function ingredientes(){
        return $this->belongsToMany('App\Ingrediente', 'recetas', 'id_producto', 'id_ingrediente');
    }
}
