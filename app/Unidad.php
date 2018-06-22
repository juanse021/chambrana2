<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    //
    protected $fillable = [
        'id_ingrediente', 'fecha_ingreso', 'fecha_vencimiento', 'cantidad',
    ];

    protected $table = 'unidades';

    public function version(){
        return $this->belongsTo('App\Ingrediente', 'id_ingrediente');
    }
}
