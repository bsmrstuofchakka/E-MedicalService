<?php

namespace App\Http\Controllers;

use App\NTModel;
use App\NTReportModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class NTReportController extends Controller
{


    public function displayNTReportDetails(Request $request){
        $data['reportList'] = NTModel::find($request->id);
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('reports.reportNTDisplayDetails',$data,$data1);
    }

    public function displayNTReport(){
        $data['reportList'] = NTModel::all();
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('reports.reportNTDisplay',$data,$data1);
    }
    public function editNTReport(Request $request){
        $data['reportEdit'] = NTModel::find($request->id);
        $userId=Auth::id();
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('reports.reportNTEdit',$data,$data1);
    }

    public function saveNTReport(Request $request){


        $data = new NTModel();
        if (isset($request->id) && !empty($request->id))
            $data = NTModel::find($request->id);
       // $data->date = $request->date;


        $data->date = $request->date;
        $data->deposite = $request->deposite;
        $data->description = $request->description;
        $data->document = $request->document;
        if(!empty($request->file('upload')))
            $data->upload= Storage::disk('public')->put('Report/NTask', $request->file('upload'));



        $data->save();
        return redirect('ntreport/Display');
    }
    public function delete(Request $request)
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
            $data['reportList'] = DB::table('n_t_models')
                ->where('date', 'like', '%' . $search . '%')
                ->orWhere('deposite', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orWhere('document', 'like', '%' . $search . '%')
                ->get();
        }


        return view('reports.reportNTDisplay', $data, $data1);
    }
}
