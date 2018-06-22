<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    //
    protected $table = "detalles";
    protected $fillable = ['id_factura','id_producto', 'cantidad'];

    public function producto(){
        return $this->belongsTo('App\Producto', 'id_producto');
    }
}
