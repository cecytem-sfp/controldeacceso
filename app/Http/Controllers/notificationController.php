<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class notificationController extends Controller
{
    public function listNotifications(){
      $notifications = DB::table('notificaciones')->get();

      return view('notificaciones', [ 'notifications' => $notifications]);
    }
	public function SaveNotification(Request $request){
		$data = $request->all();

        dd($data);
    }
}
