<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlace extends Model
{
    public function tema()
    {
        return $this->hasOne('App\Tema');
    }

    public function valoracion()
    {
        return $this->hasOne('App\Valoracion');
    }    
}
