<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function regitration(request $request){
		$validator = Validator::make($request, [
		    'id' => 'required|exist:users',
			]
			);
			
			if ($validator->fails()) {
				return json-encode(['status' => false]);
			)
			$asistencia = new Asistencia;
			
			$asistencia->hora_registro=date("y-m-d h:i:s");
			$asistencia->id = $request->get('id');
			
			$asistencia->save();
			
			return json_enconde(['status' => true]);
		)
	}
    {
        return view('home');
    }
}
