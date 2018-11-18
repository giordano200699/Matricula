<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
	protected $primarykey = 'idAlumno';
    protected $fillable = [
        'nombres', 'apePaterno', 'apeMaterno','correo'
    ];

}
