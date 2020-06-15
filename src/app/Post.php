<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopeTitulos($query, $titulo) {
    	if ($titulo) {
    		return $query->where('titulo','like',"%$titulo%");
    	}
    }



    public function scopeTipos($query, $tipo) {
    	if ($tipo) {
    		return $query->where('tipo','like',"%$tipo%");
    	}
    }
}
