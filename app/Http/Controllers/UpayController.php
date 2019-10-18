<?php

namespace App\Http\Controllers;

use App\NTModel;
use App\UpayModel;
//use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;

class UpayController extends Controller
{
    /*
        public function displayUpay(){
            return view('Upload Pay.upay');
        }

        public function saveUpay(Request $request){

            $data = new UpayModel();

            $contents = pathinfo(storage_path().'/Ckmi47ytIWmVkQtAdHBeMqX8oJDvqt2ylDtKifsX.pdf');

            dd( $contents['extension']);
            //Storage::put('/', $request->file('upload'))


            $data->stype = $request->stype;
            $data->description = $request->description;
            $data->amount = $request->amount;
            $data->document = $request->document;
            $data->upload= Storage::put('/', $request->file('upload'));

            $data->save();
            return redirect('upayDisplay');
        }

    //$file = Storage::get('app/folder-name/example.pdf');

    //$file = File::get('storage_path('app/folder-name/example.pdf');
           // return response()->file($file,  [
             //   'Content-Type' => 'application/pdf',
              //  'Content-Disposition' => 'inline; filename="a.pdf"'
           // ]);
                // dd($data->upload);
                //$contents = pathinfo(storage_path().$data->upload);
                //return storage::get($contents);
               // $contents = Storage::get('file.jpg');
                   // Storage::put('/public/', $request->file('upload'));
                //$contents = pathinfo(storage_path().$data->upload);
                //Storage::put($contents, $data->upload, 'public');
                //return response()->file($pathToFile['filename']);


    */


    public function addUpay()
    {

        $userId = Auth::id();
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        return view('UploadPay.upayAddEdit', $data1);
    }
    public function displayDetailsUpay(Request $request)
    {
        $userId = Auth::id();
        $data['upayList']=(UpayModel::find($request->id));

        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        return view('UploadPay.upayDisplayDetails', $data, $data1);
    }

    public function displayUpay()
    {
        $userId = Auth::id();

        $data['upayList'] = DB::table('upay_models')
            ->where('upay_models.userId', '=', $userId)
            ->get();


        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        return view('UploadPay.upayDisplay', $data, $data1);
    }

    public function editUpay(Request $request)
    {

        $data['upayEdit'] = UpayModel::find($request->id);
        $userId = Auth::id();
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();
        return view('UploadPay.upayAddEdit', $data, $data1);
    }

    public function saveUpay(Request $request)
    {

        $data = new UpayModel();
        if (isset($request->id) && !empty($request->id))
            $data = UpayModel::find($request->id);
        // $data->date = $request->date;

        $data->userId = Auth::id();
        $data->date = $request->date;
        $data->deposite = $request->deposite;
        $data->description = $request->description;
        $data->amount = $request->amount;
        $data->document = $request->document;
        if (!empty($request->file('upload')))
            $data->upload = Storage::disk('public')->put('Upay/', $request->file('upload'));


        $data->save();
        return redirect('upay/Display');
    }

    public function deleteUpay(Request $request)
    {
        UpayModel::find($request->id)->delete();
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
            $data['upayList'] = DB::table('upay_models')
                ->where('date', 'like', '%' . $search . '%')
                ->orWhere('deposite', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orWhere('document', 'like', '%' . $search . '%')
                ->orWhere('amount', 'like', '%' . $search . '%')
                ->get();
        }
  // dd($search);

       return view('UploadPay.upayDisplay', $data, $data1);
     }

}
