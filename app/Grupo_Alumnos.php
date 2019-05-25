<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo_Alumnos extends Model
{
    protected $fillable = ['id', 'id_grupo', 'id_usuario'];
}
