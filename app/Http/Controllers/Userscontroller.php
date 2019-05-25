<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Userscontroller extends Controller
{
    public function listusers(){
	$users = DB::table('users')->get();
	return view('userslist', ['users'=>$users]);
	}
}
