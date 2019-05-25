<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\DB;

class UsersController extends Controller
{
    public function listUser(){
		$user=BD::table('users')->get();
		
		return view(litusers, ['users' => $users]);
	}
}
