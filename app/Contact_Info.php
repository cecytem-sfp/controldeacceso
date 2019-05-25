 <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_Info extends Model
{
    protected $fillable = ['id', 'id_user', 'name', 'email', 'address', 'phone'];
}
