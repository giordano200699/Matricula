<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradoAcademico extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
    ];
}
