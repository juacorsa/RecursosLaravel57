<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre'];
}
