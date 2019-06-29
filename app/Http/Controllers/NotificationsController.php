<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function listNotifications(){
        $notifications = DB::table('notificaciones')->get();

        return view('notification', [ 'notifications' => $notifications]);
      }
	  
	public funtion saveNotification(resquet $resquest){
		$data = $resquest->all();
		dd($data);
}
