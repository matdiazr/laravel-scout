<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'nombre',
        'edad',
        'curso',
        'rama',
        'descripcion',
        'avatar',
    ];
}
