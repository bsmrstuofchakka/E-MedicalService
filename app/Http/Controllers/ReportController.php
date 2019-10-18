<?php

namespace App\Http\Controllers;

use App\ReportModel;
use App\UpayModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class ReportController extends Controller
{
  /*  public function displayReport(){
        return view('reports.report');
    }

    public function saveReport(Request $request){


        $data = new ReportModel();



        $data->date = $request->date;
        $data->description = $request->description;
        $data->deposite = $request->deposite;
        $data->amount = $request->amount;
        $data->save();
        return redirect('reportDisplay');
    } */


    public function displayDetailsReport(Request $request){
        $data['reportList'] = UpayModel::find($request->id);

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('reports.reportDisplayDetails',$data,$data1);
    }
    public function displayReport(){
        $data['reportList'] = UpayModel::all();
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('reports.reportDisplay',$data,$data1);
    }
    public function editReport(Request $request){
        $data['reportEdit'] = UpayModel::find($request->id);
        $userId=Auth::id();
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('reports.reportEdit',$data,$data1);
    }

    public function saveReport(Request $request){


        $data = new UpayModel();
        if (isset($request->id) && !empty($request->id))
            $data = UpayModel::find($request->id);
       // $data->date = $request->date;


        $data->date = $request->date;
        $data->deposite = $request->deposite;
        $data->description = $request->description;
        $data->amount = $request->amount;
        $data->document = $request->document;
        if(!empty($request->file('upload')))
            $data->upload= Storage::disk('public')->put('Upay/', $request->file('upload'));

        // $data->upload= Storage::put('/', $request->file('upload'));



        $data->save();
        return redirect('report/Display');
    }
    public function deleteReport(Request $request)
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
            $data['reportList'] = DB::table('upay_models')
                ->where('date', 'like', '%' . $search . '%')
                ->orWhere('deposite', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orWhere('document', 'like', '%' . $search . '%')
                ->orWhere('amount', 'like', '%' . $search . '%')
                ->get();
        }
        // dd($search);

        return view('reports.reportDisplay', $data, $data1);
    }

}
