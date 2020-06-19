<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function autor(){ //$libro->categoria->nombre
		return $this->belongsTo(User::class); //Pertenece a una categoría.
	}

	public function categoria(){
		return $this->belongsToMany(Categoria::class); // Muchos a muchos
	}
}
