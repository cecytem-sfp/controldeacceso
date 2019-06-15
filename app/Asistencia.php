<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public $timesstamps=false;
	protected $fillable = ['id', 'id_user', 'hora_registro'];
}
