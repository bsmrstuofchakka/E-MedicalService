<?php

namespace App\Http\Controllers;

use App\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    public function task_Add(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('task.task_add',$data1);
    }




    public function task_Display(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['info']= Task::all();
        // $visibility = Storage::getVisibility('file.jpg');

        return view('task.task_show_admin',$data,$data1);
    }


    public function task_show_user(){
        $data['info']= Task::all();
        // $visibility = Storage::getVisibility('file.jpg');

        return view('task.task_show_user',$data);
    }


    public function task_Edit(Request $request ){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['info'] = Task::find($request ->id);
        return view('task.task_add',$data,$data1);
    }

    public function saveTask(Request $request){

        $data = new Task();
        if (isset($request->id) && !empty($request->id))
            $data = Task::find($request->id);




        $data->date = $request->date;
        $data->title = $request->title;
        if(!empty($request->file('upload')))
            $data->upload= Storage::disk('public')->put('Task/', $request->file('upload'));


        $data->save();
        return redirect('task/display');
    }






    public function task_Delete(Request $request)
    {
        Task::find($request->id)->delete();
        return redirect()->back();
    }

    public function searchTask(Request $request)
    {

        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        //dd($request);
        $search = $request->search;
        // $date = $request->input('date');

        if (isset($search) && !empty($search)) {
            $data['info'] = DB::table('tasks')
                ->where('date', 'like', '%' . $search . '%')
                ->orWhere('title', 'like', '%' . $search . '%')
                ->get();
        }
        // dd($search);

        return view('task.task_show_admin', $data, $data1);
    }



}
