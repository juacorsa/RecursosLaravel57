<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{    

    public function tema()
    {
        return $this->hasOne('App\Tema');
    }

    public function valoracion()
    {
        return $this->hasOne('App\Valoracion');
    }    

    public function editorial()
    {
        return $this->hasOne('App\Editorial');
    }

    public function idioma()
    {
        return $this->hasOne('App\Idioma');
    }        
}
