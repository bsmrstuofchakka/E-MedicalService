<?php

namespace App\Http\Controllers;

use App\CostModel;
use Illuminate\Http\Request;
//use Faker\Provider\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;

class CostController extends Controller
{

    public function addCost(){
        $userId=Auth::id();
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('costs.costAddEdit',$data1);
    }


    public function displayDetailsCost(Request $request){
        $userId=Auth::id();

        $data['costList']= CostModel::find($request->id);

        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('costs.costDisplayDetails',$data,$data1);
    }


    public function displayCost(){
        $userId=Auth::id();

        $data['costList']= CostModel::all();

        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('costs.costDisplay',$data,$data1);
    }

    public function editCost(Request $request ){

        $data['costEdit'] = CostModel::find($request ->id);
        $userId=Auth::id();
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('costs.costAddEdit',$data,$data1);
    }

    public function saveCost(Request $request){

        $data = new CostModel();
        if (isset($request->id) && !empty($request->id))
            $data = CostModel::find($request->id);
        // $data->date = $request->date;

        $data->userId=Auth::id();
        $data->description = $request->description;
        $data->month = $request->month;
        $data->amount = $request->amount;
        $data->document = $request->document;
        if(!empty($request->file('upload')))
            $data->upload= Storage::disk('public')->put('Cost/', $request->file('upload'));



        $data->save();
        return redirect('cost/Display');
    }

    public function deleteCost(Request $request)
    {
        CostModel::find($request->id)->delete();
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
            $data['costList'] = DB::table('cost_models')
                ->where('description', 'like', '%' . $search . '%')
                ->orWhere('month', 'like', '%' . $search . '%')
                ->orWhere('amount', 'like', '%' . $search . '%')
                ->orWhere('document', 'like', '%' . $search . '%')
                ->get();
        }
        // dd($search);

        return view('costs.costDisplay', $data, $data1);
    }
}
