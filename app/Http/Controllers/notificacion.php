<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class notificacion extends Controller
{
    public function listnotificaciones(){
      $notificaciones = DB::table('notificaciones')->get();

      return view('notificaciones', [ 'notificaciones' => $notificaciones]);
    }
}
