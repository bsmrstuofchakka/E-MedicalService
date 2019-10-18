<?php

namespace App\Http\Controllers;

use App\Notification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
{


    public function Notification_Add(){
        $userId=Auth::user()->id;
        $userTable['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('notification.notification_add',$userTable);
    }




    public function Notification_Display(){
        $data['info']= Notification::all();
       // $userTable['']=User::all();
        $userId=Auth::user()->id;
        $userTable['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        //dd($userTable);

        // $visibility = Storage::getVisibility('file.jpg');

        return view('notification.notification_show_admin',$data,$userTable);
    }


    public function Notification_show_user(){
        $data['info']= Notification::all();
        // $visibility = Storage::getVisibility('file.jpg');

        return view('notification.notification_show_user',$data);
    }


    public function Notification_Edit(Request $request ){
        $userId=Auth::user()->id;
        $userTable['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['info'] = Notification::find($request ->id);
        return view('notification.notification_add',$data,$userTable);
    }

    public function saveNotification(Request $request){

        $data = new Notification();
        if (isset($request->id) && !empty($request->id))
            $data = Notification::find($request->id);


        $data->date = $request->date;
        $data->title = $request->title;
        if(!empty($request->file('upload')))
            $data->upload= Storage::disk('public')->put('Notification/', $request->file('upload'));


        $data->save();
        return redirect('notification/display');
    }
    public function Notification_Delete(Request $request)
    {
        Notification::find($request->id)->delete();
        return redirect()->back();
    }

    public function searchNotification(Request $request)
    {

        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        //dd($request);
        $search = $request->search;
        // $date = $request->input('date');

        if (isset($search) && !empty($search)) {
            $data['info'] = DB::table('notifications')
                ->where('date', 'like', '%' . $search . '%')
                ->orWhere('title', 'like', '%' . $search . '%')
                ->get();
        }
        // dd($search);

        return view('notification.notification_show_admin', $data, $data1);
    }


}
