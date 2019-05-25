<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\facedes\BD;

class UsersController extends Controller
{
    public function listUsers(){
		$users = DB::table('users')->get();
		
		return view('ListUsers',[ 'users' => $users]);
}