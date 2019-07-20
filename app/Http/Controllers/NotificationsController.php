<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Notificaciones;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function listNotifications(){
        $notifications = array();
        if(Auth::user()->permission == 1)
            $notifications = DB::table('notificaciones')->where('expire_at', '>=', date('Y-m-d'))->get();
        else
            $notifications = DB::table('notificaciones')->where('expire_at', '>=', date('Y-m-d'))->where('notify_to', Auth::id())->get();

        return view('notifications', [ 'notifications' => $notifications]);
    }

    public function getNotification($id){

        $notification = DB::table('notificaciones')->find($id);

        return view('notification', [ 'notification' => $notification]);
    }

    public function addNotification(){
        $users = DB::table('users')->select('id', 'name', 'no_control')->where('activo', 1)->orderBy('name', 'desc')->get();

        return view('notificationForm', [ 'users' => $users]);
    }

    public function saveNotification(Request $request){
        $data = $request->all();

        $validator = Validator::make($data, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'notify_to' => ['required', 'integer', 'exists:users,id'],
            'expire_at' => ['required', 'date_format:Y-m-d'],
            'type' => ['required', 'in:group,user'],
        ]);

        if($validator->fails()){
            return redirect("/notification/add")->withErrors($validator);
        }

        $type = 0;
        switch($data['type']){
            case 'group':
                $type = 1;
            break;

            case 'user':
            default:
                $type = 2;
            break;
        }

        Notificaciones::create(
            [
                'owner' => Auth::id(),
                'title' => $data['title'],
                'description' => $data['description'],
                'notify_to' => $data['notify_to'],
                'expire_at' => $data['expire_at'],
                'type' => $type,
                'date' => date('Y-m-d H:i:s'),
            ]
        );

        $receiver = DB::table('users')->where('id', $data['notify_to'])->first();
        $message = '';
        $status = true;
        $data = array('subject' => $data['title'], 'message' => $data['description'] );

        try{
            Mail::to($receiver->email)->send(new NotificationMail($data));
        } catch(\Exception $e){
            $message = $e->getMessage();
            $status = false;
        }

        if($status){
            return redirect("/notifications");
        } else {
            $validator->errors()->add('mail_deliver', $message);
            return redirect("/notifications")->withErrors($validator);
        }

    }
}
