<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{

  protected $fillable = ['id', 'texto', 'owner', 'group', 'receiver', 'fecha', 'tipo'];
}
