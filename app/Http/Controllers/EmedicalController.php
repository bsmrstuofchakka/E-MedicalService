<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmedicalController extends Controller
{





    public function displayMain(){
        return view('main.index');
    }


    public function displayEmedical(){

        $userId=Auth::user()->id;
        $data['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('index',$data);
    }



}
