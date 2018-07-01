<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    protected $guarded = [];

    public function usuario(){
        return $this->belongsTo('App\User', 'id_usuario');
    }
}
