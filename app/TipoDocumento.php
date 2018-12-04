<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $fillable = [
        'nombre', 'descripcion','idGradoAcademico'
    ];

    public function documentos()
    {
      return $this->hasMany('App\Documento','idTipoDocumento');
    }
    public function gradoAcademico()
    {
      return $this->belongsTo('App\GradoAcademico','idGradoAacademico');
    }
}
