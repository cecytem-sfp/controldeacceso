<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencia;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	
	public function registration(Request $request){
	 $validator = Validator:: make($request->all(), [
	 
	 'id' => 'required|exists:users', 
	 ]
	 );

      if ($validator->fails()){
        return response()->json(['status'=>false]);		  
     }
	 $asistencia = new Asistencia;
	 
	 $asistencia->hora_registro = date("Y-m-d h:i:s");
	 $asistencia->id_user = $request->get('id');
	 
	 $asistencia->save();
	 
	 return response()->json(['status' =>true]);
}
}