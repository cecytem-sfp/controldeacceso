<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_Info extends Model
{
    public $timestamps = false;

    public $table = 'contact_info';

    protected $fillable = ['id', 'id_user', 'name', 'email', 'address', 'phone'];
}
