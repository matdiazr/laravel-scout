<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function curso(){ 
		return $this->belongsTo(Curso::class); 
    }

    public function rama(){
        return $this->belongsTo(Rama::class);
    }
}
