<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombres', 'apePaterno', 'apeMaterno','correo','imgUrl'
    ];
    public function setImgUrlAttribute($urlImg)
    {
      return $urlImg;
       if ($urlImg && !is_string($urlImg)) {
          $this->attributes['imgUrl'] = time() . $urlImg->getClientOriginalName();
          $name = time() . $urlImg->getClientOriginalName();
          \Storage::disk('localUsuarios')->put($name, \File::get($urlImg));
       }
    }
    public function documentos()
    {
      return $this->hasMany('App\Documento','idAlumno');
    }

}
