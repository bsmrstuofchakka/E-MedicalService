<?php

namespace App\Http\Controllers;

use App\FolderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;

class FolderController extends Controller
{


    public function addFolder(){
        $userId=Auth::id();
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('folders.folderAddEdit',$data1);
    }

    public function displayDetailsFolder(Request $request){
        $userId=Auth::id();

        $data['folderList']= FolderModel::find($request->id);


        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('folders.folderDisplayDetails',$data,$data1);
    }


    public function displayFolder(){
        $userId=Auth::id();

        $data['folderList']= FolderModel::all();


        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('folders.folderDisplay',$data,$data1);
    }

    public function editFolder(Request $request ){

        $data['folderEdit'] = FolderModel::find($request ->id);
        $userId=Auth::id();
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('folders.folderAddEdit',$data,$data1);
    }

    public function saveFolder(Request $request){

        $data = new FolderModel();
        if (isset($request->id) && !empty($request->id))
            $data = FolderModel::find($request->id);



        $data->date = $request->date;
        $data->title = $request->title;
        $data->description = $request->description;
        if(!empty($request->file('upload')))
            $data->upload= Storage::disk('public')->put('Folder/', $request->file('upload'));
          //  $data->upload= Storage::put('/Folder/', $request->file('upload'));



        $data->save();
        return redirect('folder/Display');
    }

    public function deleteFolder(Request $request)
    {
        FolderModel::find($request->id)->delete();
        return redirect()->back();
    }
    public function searchFolder(Request $request)
    {

        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        //dd($request);
        $search = $request->search;
        // $date = $request->input('date');

        if (isset($search) && !empty($search)) {
            $data['folderList'] = DB::table('folder_models')
                ->where('date', 'like', '%' . $search . '%')
                ->orWhere('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->get();
        }
        // dd($search);

        return view('folders.folderDisplay', $data, $data1);
    }

}
