<?php

namespace App\Http\Controllers;

use App\ContactInfoModel;
use App\NomineeInfoModel;
use App\PersonalInfoModel;
use App\PhotoModel;
use App\ProfessionalInfoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    //personal for Member part

    public function displayPersonalM(){

        //$data['personalInfoMember'] = PersonalInfoModel::all()->paginate(6);
        $data['personalInfoMember'] = PersonalInfoModel::all();
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
       // dd($data);
        //return view('welcome',['personalM'=>$data]);
        return view('members.personalM',$data,$data1);
    }
    public function savePersonalM(Request $request){

       // dd($request);
        $data = new PersonalInfoModel();
        if(isset($request->id)&& !empty($request->id))
            $data=PersonalInfoModel::find($request->id);


       // if(!empty($request->file('nphoto')))
          //  $data->nphoto= $this->uploadimage($request->file('nphoto'),'uploads/nomineePhotos/','','','');

    /*    $data1= DB::table('personal_info_models')
            ->where('personal_info_models.id',$id)
            ->select('personal_info_models.userId,personal_info_models.id')->get();
        dd($data1);
*/

       // $data->user=$userId;
        $data->title = $request->title;
        $data->firstname = $request->firstname;
        $data->middlename = $request->middlename;
        $data->lastname = $request->lastname;
        $data->date = $request->date;
        $data->sex = $request->sex;
        $data->nationality= $request->nationality;
        $data->nid= $request->nid;
        $data->save();
        return redirect('personalInfo/Display');
    }
    public function editPersonalM(Request $request){

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['personal'] = PersonalInfoModel::find($request->id);

        return view('members.personalAddEdit', $data,$data1);
    }
    public function deletePersonalM(Request $request){
        PersonalInfoModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function searchPersonalM(Request $request)
    {

        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        //dd($request);
        $search = $request->search;
        // $date = $request->input('date');

        if (isset($search) && !empty($search)) {
            $data['personalInfoMember'] = DB::table('personal_info_models')
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('firstname', 'like', '%' . $search . '%')
                ->orWhere('middlename', 'like', '%' . $search . '%')
                ->orWhere('lastname', 'like', '%' . $search . '%')
                ->orWhere('date', 'like', '%' . $search . '%')
                ->orWhere('sex', 'like', '%' . $search . '%')
                ->orWhere('nationality', 'like', '%' . $search . '%')
                ->orWhere('nid', 'like', '%' . $search . '%')
                ->get();
        }
        // dd($search);

        return view('members.personalM', $data, $data1);
    }







    public function displayProfessionalM(){

        $data['professionalInfoMember'] = ProfessionalInfoModel::all();
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('members.professionalM',$data,$data1);
    }
    public function saveProfessionalM(Request $request){

        $data = new ProfessionalInfoModel();
        if(isset($request->id)&& !empty($request->id))
            $data=ProfessionalInfoModel::find($request->id);

        $data->ladegree = $request->ladegree;
        $data->specialization = $request->specialization;
        $data->cdesignation = $request->cdesignation;
        $data->affiliation = $request->affiliation;
        $data->parmaddress = $request->parmaddress;
        $data->fdesignation = $request->fdesignation;
        $data->oline1= $request->oline1;
        $data->oline2= $request->oline2;
        $data->save();
        return redirect('professionalInfo/Display');
    }
    public function editProfessionalM(Request $request){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['professional'] = ProfessionalInfoModel::find($request->id);
        return view('members.professionalAddEdit', $data,$data1);
    }
    public function deleteProfessionalM(Request $request){
        ProfessionalInfoModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function searchProfessionalM(Request $request)
    {

        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        //dd($request);
        $search = $request->search;
        // $date = $request->input('date');

        if (isset($search) && !empty($search)) {
            $data['professionalInfoMember'] = DB::table('professional_info_models')
                ->where('ladegree', 'like', '%' . $search . '%')
                ->orWhere('specialization', 'like', '%' . $search . '%')
                ->orWhere('cdesignation', 'like', '%' . $search . '%')
                ->orWhere('affiliation', 'like', '%' . $search . '%')
                ->orWhere('parmaddress', 'like', '%' . $search . '%')
                ->orWhere('fdesignation', 'like', '%' . $search . '%')
                ->orWhere('oline1', 'like', '%' . $search . '%')
                ->orWhere('oline2', 'like', '%' . $search . '%')
                ->get();
        }
        // dd($search);

        return view('members.professionalM', $data, $data1);
    }


    //contact for members  part
    public function displayContactM(){

        $data['contactInfoMember'] = ContactInfoModel::all();
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('members.contactM',$data,$data1);
    }
    public function saveContactM(Request $request){

        $data = new ContactInfoModel();
        if(isset($request->id)&& !empty($request->id))
            $data=ContactInfoModel::find($request->id);


        $data->userId = $request->userId;
        $data->cnumber = $request->cnumber;
        $data->email = $request->email;
        $data->fname = $request->fname;
        $data->mname = $request->mname;
        $data->paddress = $request->paddress;
        $data->contactEmergency = $request->contactEmergency;
        $data->relationship= $request->relationship;
        $data->save();
        return redirect('contactInfo/Display');
    }
    public function editContactM(Request $request){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['contact'] = ContactInfoModel::find($request->id);
        return view('members.contactAddEdit', $data,$data1);
    }
    public function deleteContactM(Request $request){
        ContactInfoModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function searchContactM(Request $request)
    {

        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        //dd($request);
        $search = $request->search;
        // $date = $request->input('date');

        if (isset($search) && !empty($search)) {
            $data['contactInfoMember'] = DB::table('contact_info_models')
                ->where('userId', 'like', '%' . $search . '%')
                ->orWhere('cnumber', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('fname', 'like', '%' . $search . '%')
                ->orWhere('mname', 'like', '%' . $search . '%')
                ->orWhere('paddress', 'like', '%' . $search . '%')
                ->orWhere('contactEmergency', 'like', '%' . $search . '%')
                ->orWhere('relationship', 'like', '%' . $search . '%')
                ->get();
        }
        // dd($search);

        return view('members.contactM', $data, $data1);
    }



    //nominee for members  part
    public function displayNomineeM(){

        $data['nomineeInfoMember'] = NomineeInfoModel::all();
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('members.nomineeM',$data,$data1);
    }
    public function saveNomineeM(Request $request){

        $data = new NomineeInfoModel();
        if(isset($request->id)&& !empty($request->id))
            $data=NomineeInfoModel::find($request->id);

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
        if(!empty($request->file('nphoto')))
            $data->nphoto= $this->uploadimage($request->file('nphoto'),'uploads/nomineePhotos/','','','');

        $data->save();
        return redirect('nomineeInfo/Display');
    }
    public function editNomineeM(Request $request){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['nomineeInfoM'] = NomineeInfoModel::find($request->id);
        return view('members.nomineeAddEdit', $data,$data1);
    }
    public function deleteNomineeM(Request $request){
        NomineeInfoModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function searchNomineeM(Request $request)
    {

        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();

        //dd($request);
        $search = $request->search;
        // $date = $request->input('date');

        if (isset($search) && !empty($search)) {
            $data['nomineeInfoMember'] = DB::table('nominee_info_models')
                ->where('nname', 'like', '%' . $search . '%')
                ->orWhere('nfname', 'like', '%' . $search . '%')
                ->orWhere('nmname', 'like', '%' . $search . '%')
                ->orWhere('nsname', 'like', '%' . $search . '%')
                ->orWhere('nsex', 'like', '%' . $search . '%')
                ->orWhere('ndate', 'like', '%' . $search . '%')
                ->orWhere('nnationality', 'like', '%' . $search . '%')
                ->orWhere('nnid', 'like', '%' . $search . '%')
                ->orWhere('npaddress', 'like', '%' . $search . '%')
                ->orWhere('npresentaddress', 'like', '%' . $search . '%')
                ->orWhere('isign', 'like', '%' . $search . '%')
                ->get();
        }
        // dd($search);

        return view('members.nomineeM', $data, $data1);
    }




    //photo for members  part
    public function displayPhotoM(){

        $data['photoMember'] = PhotoModel::all();
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('members.photoM',$data,$data1);
    }
    public function savePhotoM(Request $request){

        $data = new PhotoModel();
        if(isset($request->id)&& !empty($request->id))
            $data=PhotoModel::find($request->id);

        if(!empty($request->file('photo')))
            $data->photo= $this->uploadimage($request->file('photo'),'uploads/Photos/','','','');



        $data->save();
        return redirect('photo/Display');
    }
    public function editPhotoM(Request $request){
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['photoM'] = PhotoModel::find($request->id);
        return view('members.photoAddEdit', $data,$data1);
    }
    public function deletePhotoM(Request $request){
        PhotoModel::find($request->id)->delete();
        return redirect()->back();
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
