<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Notifications extends Controller
{
   public function listNotifications(){
      $notificaciones = DB::table('notificaciones')->get();

      return view('notifications', [ 'notificaciones' => $notificaciones]);
    }
}
