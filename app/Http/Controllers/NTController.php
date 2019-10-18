<?php

namespace App\Http\Controllers;

use App\NTModel;
//use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;

class ntController extends Controller
{


    public function addNT(){
        $userId=Auth::id();
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('UploadNT.ntAddEdit',$data1);
    }




    public function displayDetailsNT(Request $request){
        $userId=Auth::id();
        $data['ntList']=NTModel::find($request->id);




        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('UploadNT.ntDisplayDetails',$data,$data1);
    }

    public function displayNT(){
        $userId=Auth::id();

        $data['ntList']= DB::table('n_t_models')
            -> where('n_t_models.userId','=',$userId)
            ->get();


        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('UploadNT.ntDisplay',$data,$data1);
    }

    public function editNT(Request $request ){

        $data['ntEdit'] = NTModel::find($request ->id);
        $userId=Auth::id();
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('UploadNT.ntAddEdit',$data,$data1);
    }

    public function saveNT(Request $request){

        $data = new ntModel();
        if (isset($request->id) && !empty($request->id))
            $data = NTModel::find($request->id);
        // $data->date = $request->date;

        $data->userId=Auth::id();
        $data->date = $request->date;
        $data->deposite = $request->deposite;
        $data->description = $request->description;

        $data->document = $request->document;
        if(!empty($request->file('upload')))
            $data->upload= Storage::disk('public')->put('NTask/', $request->file('upload'));

        //$data->upload= Storage::put('/NotificationTask', $request->file('upload'));



        $data->save();
        return redirect('nt/Display');
    }

    public function deleteNT(Request $request)
    {
        NTModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {

        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        //dd($request);
        $search = $request->search;
        // $date = $request->input('date');


        if (isset($search) && !empty($search)) {
            $data['ntList'] = DB::table('n_t_models')
                ->where('date', 'like', '%' . $search . '%')
                ->orWhere('deposite', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orWhere('document', 'like', '%' . $search . '%')

                ->get();
        }
        // dd($search);

        return view('UploadNT.ntDisplay', $data, $data1);
    }



}
