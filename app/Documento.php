<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'idTipoDocumento','codigo', 'descripcion','imgUrl','idAlumno','imgUrl2'
    ];

    public function setImgUrlAttribute($urlImg)
    {
       if ($urlImg && !is_string($urlImg)) {
          $this->attributes['imgUrl'] = time() . $urlImg->getClientOriginalName();
          $name = time() . $urlImg->getClientOriginalName();
          \Storage::disk('localPublicaciones')->put($name, \File::get($urlImg));
       }
    }


    public function tipoDocumento()
    {
      return $this->belongsTo('App\TipoDocumento','idTipoDocumento');
    }
    public function alumno()
    {
      return $this->belongsTo('App\Alumno','idAlumno');
    }
}
