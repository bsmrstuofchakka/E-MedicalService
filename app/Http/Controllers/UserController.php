<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function addUser(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('admin.set.userEdit',$data1);
    }

    public function listUser(){
        $data['users']=User::all();
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('admin.set.userList', $data,$data1);
    }

  /*  public function addUser(){
        return view('admin.set.userAddEdit');
    } */

  public function saveUser(Request $request){
      $data = new User();
//dd($request);
      if(isset($request->id) &&!empty($request->id))
          $data = User::find($request->id);

      $data->username=$request->username;
      $data->email=$request->email;
      $data->password=bcrypt($request->password);
      $data->userType= $request->userType;
      $data->save();
      return redirect('users');
  }

    public function deleteUser(Request $request){
        User::find($request->id)->delete();
        return redirect()->back();
    }

    public function editUser(Request $request){
        $data['users'] = User::find($request->id);
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('admin.set.userEdit',$data,$data1);
    }

    public function searchUser(Request $request)
    {

        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        //dd($request);
        $search = $request->search;
        // $date = $request->input('date');
$data=new User();

        if (isset($search) && !empty($search)) {
            $data['users'] = DB::table('users')
                ->where('id', 'like', '%' . $search . '%')
                ->orwhere('username', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('userType', 'like', '%' . $search . '%')
                ->get();
        }


        return view('admin.set.userList', $data, $data1);
    }


}
