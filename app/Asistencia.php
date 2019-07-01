<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
	public $timestamps=false;
    protected $fillable = ['id', 'id_user', 'hora_registro'];

    protected $table = 'asistencia';

    public $timestamps = false;
}
