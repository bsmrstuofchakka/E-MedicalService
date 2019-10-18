<?php

namespace App\Http\Controllers;

use App\ContactInfoModel;
use App\NomineeInfoModel;
use App\PersonalInfoModel;
use App\PhotoModel;
use App\ProfessionalInfoModel;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{


    public function displayPersonalInfo(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('profiles.personalInfo',$data1);
    }
    public function savePersonalInfo(Request $request){

        $data = new PersonalInfoModel();

        //dd($data);
      //  if(isset($request->id) && !empty($request->id))
          //  $data=Flower::find($request->id);
       // $id= $request->user()->id;

        $user_id = Auth::user()->id;

     /*  $data=DB::table('users')
            ->join('personal_info_models','personal_info_models.userId','users.id')
           ->where('users.id',$data1)
            ->select('personal_info_models.userId','users.id')->get();  */

        $data2=DB::table('personal_info_models')
            ->join('users','users.id','personal_info_models.userId')
            ->where('users.id',$user_id)
            ->select('personal_info_models.userId')->get();

           // if(isset(PersonalInfoModel::all()->first()->id) && !empty(PersonalInfoModel::all()->first()->id))


        if(!empty(count($data2)))
            $data = PersonalInfoModel::where('userId',Auth::id())->first();





        //dd($data);

        $data->userId=Auth::id();
        $data->title = $request->title;
        $data->firstname = $request->firstname;
        $data->middlename = $request->middlename;
        $data->lastname = $request->lastname;
        $data->date = $request->date;
        $data->sex = $request->sex;
        $data->nationality= $request->nationality;
        $data->nid= $request->nid;
        $data->save();
        return redirect('personalInfoEdit');
    }
    public function editPersonalInfo(){

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['personal'] = PersonalInfoModel::where('userId',Auth::id())->first();
        return view('profiles.personalInfo', $data,$data1);
    }




    public function displayProfessionalInfo(){

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('profiles.professionalInfo',$data1);
    }
    public function saveProfessionalInfo(Request $request){

        $data = new ProfessionalInfoModel();
        $user_id = Auth::user()->id;
        $data2=DB::table('professional_info_models')
            ->join('users','users.id','professional_info_models.userId')
            ->where('users.id',$user_id)
            ->select('professional_info_models.userId')->get();

        if(!empty(count($data2)))
            $data = ProfessionalInfoModel::where('userId',Auth::id())->first();



        $data->userId =Auth::id();
        $data->ladegree = $request->ladegree;
        $data->specialization = $request->specialization;
        $data->cdesignation = $request->cdesignation;
        $data->affiliation = $request->affiliation;
        $data->parmaddress = $request->parmaddress;
        $data->fdesignation = $request->fdesignation;
        $data->oline1 = $request->oline1;
        $data->oline2 = $request->oline2;

        $data->save();
        return redirect('professionalInfoEdit');
    }

     public function editProfessioanlInfo(){
         $userId=Auth::user()->id;
         $data1['userTable']= DB::table('users')
             ->where('users.id','=',$userId)
             ->first();
        $data['professional'] = ProfessionalInfoModel::where('userId',Auth::id())->first();
        return view('profiles.professionalInfo', $data,$data1);
    }



    public function displayContactInfo(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('profiles.contactInfo',$data1);
    }
    public function saveContactInfo(Request $request){

        $data = new ContactInfoModel();
        $user_id = Auth::user()->id;
        $data2=DB::table('contact_info_models')
            ->join('users','users.id','contact_info_models.userId')
            ->where('users.id',$user_id)
            ->select('contact_info_models.userId')->get();

        if(!empty(count($data2)))
            $data = ContactInfoModel::where('userId',Auth::id())->first();



        $data->userId=Auth::id();
        $data->cnumber = $request->cnumber;
        $data->email = $request->email;
        $data->fname = $request->fname;
        $data->mname = $request->mname;
        $data->paddress = $request->paddress;
        $data->contactEmergency = $request->contactEmergency;
        $data->relationship= $request->relationship;

        $data->save();
        return redirect('contactInfoEdit');
    }
    public function editContactInfo(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['contact'] = ContactInfoModel::where('userId',Auth::id())->first();
        //dd($data);
        return view('profiles.contactInfo', $data,$data1);
    }


    public function displayNomineeInfo(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('profiles.nomineeInfo',$data1);
    }
    public function saveNomineeInfo(Request $request){

        $data = new NomineeInfoModel();
        $user_id = Auth::user()->id;
        $data2=DB::table('nominee_info_models')
            ->join('users','users.id','nominee_info_models.userId')
            ->where('users.id',$user_id)
            ->select('nominee_info_models.userId')->get();

        if(!empty(count($data2)))
            $data = NomineeInfoModel::where('userId',Auth::id())->first();





//dd($request);

       // $contents = pathinfo(storage_path().'/zOEh8zefUuHmOhlLY80UNNneTO5tJmv1ECfrwOpF.png');

      //  dd( $contents['extension']);


        $data->userId=Auth::id();
        $data->nname = $request->nname;
        $data->nfname = $request->nfname;
        $data->nmname = $request->nmname;
        $data->nsname = $request->nsname;
        $data->nsex = $request->nsex;
        $data->ndate = $request->ndate;
        $data->nnationality= $request->nnationality;
        $data->nnid= $request->nnid;
        $data->npaddress= $request->npaddress;
        $data->nnationality= $request->nnationality;
        $data->npresentaddress= $request->npresentaddress;
        $data->isign= $request->isign;
      //  $data->nphoto= $request->nphoto;
        //        $data->photo= Storage::put('/Photos', $request->file('photo'));
        //$data->nphoto=Storage::put('/Nominee Photos', $request->file('nphoto'));



        if(!empty($request->file('nphoto')))
        $data->nphoto= $this->uploadimage($request->file('nphoto'),'uploads/nomineePhotos/','','','');


        $data->save();
        return redirect('nomineeInfoEdit');
    }
    public function editNomineeInfo(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['nomineeinfo'] = NomineeInfoModel::where('userId',Auth::id())->first();

        return view('profiles.nomineeInfo', $data,$data1);
    }


    public function displayPhoto(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('profiles.photo',$data1);
    }
    public function savePhoto(Request $request){

        $data = new PhotoModel();
        $user_id = Auth::user()->id;
        $data2=DB::table('photo_models')
            ->join('users','users.id','photo_models.userId')
            ->where('users.id',$user_id)
            ->select('photo_models.userId')->get();

        if(!empty(count($data2)))
            $data = PhotoModel::where('userId',Auth::id())->first();


        $data->userId=Auth::id();

        if(!empty($request->file('photo')))
            $data->photo= $this->uploadimage($request->file('photo'),'uploads/Photos/','','','');


        //$data->photo= Storage::put('/Photos', $request->file('photo'));
        //  $data->nphoto= $request->nphoto;
        //Storage::put('/Photos', $request->file('photo'));

        $data->save();
        return redirect('photoEdit');


    }
    public function editPhoto(){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['photom'] = PhotoModel::where('userId',Auth::id())->first();
        return view('profiles.photo', $data,$data1);
    }


    //image upload function

    function uploadimage($img, $path, $user_file_name = null, $width =null , $height = null)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists($path . $user_file_name)) {
            unlink($path . $user_file_name);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists(path_image_thumb() . $user_file_name)) {
            unlink(path_image_thumb() . $user_file_name);
        }
// saving image in target path
        $imgName = uniqid() . '.' . $img->getClientOriginalExtension();
        $imgPath = public_path($path . $imgName);


        $img_main = \Intervention\Image\Facades\Image::make($img);
        $img_main->orientate();
        $img_main->save($path.$imgName);


        if ( file_exists($path. $imgName)) {

            /*   $newNme = public_path(path_image_thumb() . $imgName);

               if (!file_exists(path_image_thumb())) {
                  mkdir(path_image_thumb(), 0777, true);
               }
              $img = \Intervention\Image\Facades\Image::make($imgPath);
              $img->fit(200);
               $img->orientate();
               $img->save(path_image_thumb().$imgName);
   */
            return $imgName;
        }
        return false;
    }

}
