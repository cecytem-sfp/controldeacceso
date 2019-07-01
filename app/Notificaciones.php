<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
    public $timestamps = false;

  protected $fillable = ['id', 'title', 'description', 'type', 'notify_to', 'owner', 'date', 'expire_at'];
}
