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
	  public function saveNotification(Request $request){
		  $data=$request->all();
		  
		  $validator = Validator::make($data,[
            'title'=>['required', 'string'],
		    'description'=>['required', 'string'],
			'type'=>['required', 'integer'],
			'notify_to'=>['required', 'bigInteger'],
			'owner'=>['required', 'bigInteger'],
			'date'=>['required', 'dateTime'],
			'expire_at'=>['required', 'dateTime']
			 ]);
		  }
	  
}
