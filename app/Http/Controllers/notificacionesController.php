<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class notificacionesController extends Controller
{
    public function listnotificaciones(){
      $notificaciones = DB::table('notificaciones')->get();

      return view('notificaciones', [ 'notificaciones' => $notificaciones]);
    }
	public function savenotificaciones(Request $request){
		$data = $request->all();
		
		dd($data);
	}
}