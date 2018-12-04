<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombres', 'apePaterno', 'apeMaterno','correo'
    ];
    public function documentos()
    {
      return $this->hasMany('App\Documento','idAlumno');
    }

}
