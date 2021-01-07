<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    //protected $fillable = ['title','url','description',]; //est propiedad sirve para asignar los campos que se asignen masivamente  guarded es el opueto.


      protected  $guarded = []; // con este campo todos los campos posibles estan permitidos.
}
