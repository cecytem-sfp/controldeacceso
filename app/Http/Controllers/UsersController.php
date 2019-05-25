<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function listUsers (){
		$users = DB::table('users')->get();
		
	return view ('listusers', [ 'users' => $users]);
}
