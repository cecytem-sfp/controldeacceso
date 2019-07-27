<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Contact_Info;
use Illuminate\Support\Facades\Auth;

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

        $emergency_contact = DB::table('contact_info')->where('id_user', $id)->get();

        return view('userdetails', [ 'user' => $user, 'emergency_contact' => $emergency_contact]);
    }

    public function emergencycontact(){
        return view('emergencyContact');
    }

    public function saveEmergencyContact(Request $request){
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'phone' => ['sometimes', 'present', 'digits:10'],
            'email' => ['sometimes', 'present', 'email'],
        ]);

        if($validator->fails()){
            return redirect("/emergencycontact/add")->withErrors($validator);
        }

        Contact_Info::create(
            [
                'id_user' => Auth::id(),
                'name' => $data['name'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'email' => $data['email'],
            ]
        );

        return redirect("/home");
    }
}
