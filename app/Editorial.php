<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre'];
}
