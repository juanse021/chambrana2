<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    //
    protected $fillable = [
         'nombre', 'tipo'
    ];

    protected $table = 'ingredientes';

    public function unidades(){
        return $this->hasMany('App\Unidad', 'id_ingrediente')->orderBy('cantidad');
    }

    public function cantidad(){
        $unidades = $this->unidades;
        $sum = 0;
        foreach ($unidades as $unidad){
            $sum += $unidad->cantidad;
        }
        return $sum;
    }

}
