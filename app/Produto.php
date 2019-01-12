<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    function categoria(){
        return $this->belongsTo('App\Categoria');
    }
    public function imagem() {
        return $this->hasMany('App\Imagem');
    }
    
    public function ficah_tecnica() {
        return $this->hasMany('App\FichaTecnica');
    }

}
