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
	  public function savenotification(Request $request){
		$data = $request->all();
	  
	$validator = Validator::make($data,[
			$title->bigIncrements('id');
			$table->string('title');
			$table->string('description');
			$table->integer('type');
			$table->bigInteger('notify_to');
			$table->bigInteger('owner');
			$table->dateTime('date');
			$table->dateTime('expire_at');
}
