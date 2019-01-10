<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    public function tema()
    {
        return $this->hasOne('App\Tema');
    }

    public function valoracion()
    {
        return $this->hasOne('App\Valoracion');
    }    

    public function fabricante()
    {
        return $this->hasOne('App\Fabricante');
    }

    public function idioma()
    {
        return $this->hasOne('App\Idioma');
    }            
}
