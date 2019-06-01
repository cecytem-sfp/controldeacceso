<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\User;

class UsersController extends Controller
{
    public function listUsers(){
      $users = DB::table('users')->get();

      return view('listusers', [ 'users' => $users]);
    }

    public function userDetails($id){
        $validator = Validator::make(
            ['id' => $id],
            [
                'id' => 'required|exists:users'
            ]
          );

        if ($validator->fails()) {
            return redirect("/users/list");
        }

        $user = User::find($id);

        return view('userdetails', [ 'user' => $user]);
    }
}
