<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*  Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','EmedicalController@displayMain');
Route::get('emedical','EmedicalController@displayEmedical');


Route::group(['middleware' => 'customAuth'], function(){

// admin details
});

Route::get('users','UserController@listUser');
 Route::get('users/add','UserController@addUser');
Route::get('users/edit','UserController@editUser');
Route::get('users/delete','UserController@deleteUser');
Route::post('users/save','UserController@saveUser');

//for searcing in notification page

Route::post('users/search','UserController@searchUser');
Route::get('users/search','UserController@searchUser');





// profiles


Route::get('personalInfoDisplay','ProfileController@displayPersonalInfo');
Route::post('personalInfoSave','ProfileController@savePersonalInfo');
Route::get('personalInfoEdit','ProfileController@editPersonalInfo');


Route::get('professionalInfoDisplay','ProfileController@displayProfessionalInfo');
Route::post('professionalInfoSave','ProfileController@saveProfessionalInfo');
Route::get('professionalInfoEdit','ProfileController@editProfessioanlInfo');


Route::get('contactInfoDisplay','ProfileController@displayContactInfo');
Route::post('contactInfoSave','ProfileController@saveContactInfo');
Route::get('contactInfoEdit','ProfileController@editContactInfo');




Route::get('nomineeInfoDisplay','ProfileController@displayNomineeInfo');
Route::post('nomineeInfoSave','ProfileController@saveNomineeInfo');
Route::get('nomineeInfoEdit','ProfileController@editNomineeInfo');




Route::get('photoDisplay','ProfileController@displayPhoto');
Route::post('photoSave','ProfileController@savePhoto');
Route::get('photoEdit','ProfileController@editPhoto');

//members part


//member_personal_part

Route::get('personalInfo/Display','MemberController@displayPersonalM');
Route::post('personalInfo/Save','MemberController@savePersonalM');
Route::get('personalInfo/Edit','MemberController@editPersonalM');
Route::get('personalInfo/Delete','MemberController@deletePersonalM');

//member_personal_search

Route::post('personalInfo/search','MemberController@searchPersonalM');
Route::get('personalInfo/search','MemberController@searchPersonalM');


//member_professional_part

Route::get('professionalInfo/Display','MemberController@displayProfessionalM');
Route::post('professionalInfo/Save','MemberController@saveProfessionalM');
Route::get('professionalInfo/Edit','MemberController@editProfessionalM');
Route::get('professionalInfo/Delete','MemberController@deleteProfessionalM');


//member_professionalM_search

Route::post('professionalInfo/search','MemberController@searchProfessionalM');
Route::get('professionalInfo/search','MemberController@searchProfessionalM');


//member_contact_part

Route::get('contactInfo/Display','MemberController@displayContactM');
Route::post('contact/InfoSave','MemberController@saveContactM');
Route::get('contactInfo/Edit','MemberController@editContactM');
Route::get('contactInfo/Delete','MemberController@deleteContactM');


//member_contactM_search

Route::post('contactInfo/search','MemberController@searchContactM');
Route::get('contactInfo/search','MemberController@searchContactM');



//member_nominee_part

Route::get('nomineeInfo/Display','MemberController@displayNomineeM');
Route::post('nomineeInfo/Save','MemberController@saveNomineeM');
Route::get('nomineeInfo/Edit','MemberController@editNomineeM');
Route::get('nomineeInfo/Delete','MemberController@deleteNomineeM');


//member_nominee_search

Route::post('nomineeInfo/search','MemberController@searchNomineeM');
Route::get('nomineeInfo/search','MemberController@searchNomineeM');


//member_photo_part

Route::get('photo/Display','MemberController@displayPhotoM');
Route::post('photo/Save','MemberController@savePhotoM');
Route::get('photo/Edit','MemberController@editPhotoM');
Route::get('photo/Delete','MemberController@deletePhotoM');



//use for report

Route::get('report/Display','ReportController@displayReport');
Route::get('report/DisplayDetails','ReportController@displayDetailsReport');
Route::get('report/Edit','ReportController@editReport');
Route::get('report/Delete','ReportController@deleteReport');
Route::post('report/Save','ReportController@saveReport');

//for searcing in report page

Route::post('searchReport','ReportController@search');
Route::get('searchReport','ReportController@search');





// report for Notification/Task

Route::get('ntreport/Display','NTReportController@displayNTReport');
Route::get('ntreport/DisplayDetails','NTReportController@displayNTReportDetails');
Route::get('ntreport/Edit','NTReportController@editNTReport');
Route::get('ntreport/Delete','NTReportController@deleteNTReport');
Route::post('ntreport/Save','NTReportController@saveNTReport');


//report search for Notification/Task

Route::post('searchNTReport','NTReportController@search');
Route::get('searchNTReport','NTReportController@search');



//use for upload pay
Route::get('upay/Add','UpayController@addUpay');
Route::get('upay/Display','UpayController@displayUpay');
Route::get('upay/DisplayDetails','UpayController@displayDetailsUpay');
Route::post('upay/Save','UpayController@saveUpay');
Route::get('upay/Edit','UpayController@editUpay');
Route::get('upay/Delete','UpayController@deleteUpay');


//for searcing in upload pay page

Route::post('search','UpayController@search');
Route::get('search','UpayController@search');


//use for notification  which are access only admin
Route::get('notification/add','NotificationController@Notification_Add');
Route::get('notification/display','NotificationController@Notification_Display');
Route::get('notification/edit','NotificationController@Notification_Edit');
Route::get('notification/delete','NotificationController@Notification_Delete');
Route::post('notificationSave','NotificationController@saveNotification');

//for searcing in notification page

Route::post('notification/search','NotificationController@searchNotification');
Route::get('notification/search','NotificationController@searchNotification');



//use for task  which are access only admin
Route::get('task/add','TaskController@task_Add');
Route::get('task/display','TaskController@task_Display');
Route::get('task/edit','TaskController@task_Edit');
Route::get('task/delete','TaskController@task_Delete');
Route::post('taskSave','TaskController@saveTask');

//for searcing in task page

Route::post('task/search','TaskController@searchTask');
Route::get('task/search','TaskController@searchTask');



//use for upload Notification/Task
Route::get('nt/Add','NTController@addNT');
Route::get('nt/Display','NTController@displayNT');
Route::get('nt/DisplayDetails','NTController@displayDetailsNT');
Route::post('nt/Save','NTController@saveNT');
Route::get('nt/Edit','NTController@editNT');
Route::get('nt/Delete','NTController@deleteNT');

//for searcing in uploading notification and task page

Route::post('searchNT','NTController@search');
Route::get('searchNT','NTController@search');



//use for cost
Route::get('cost/Add','CostController@addCost');
Route::get('cost/Display','CostController@displayCost');
Route::get('cost/DisplayDetails','CostController@displayDetailsCost');
Route::post('cost/Save','CostController@saveCost');
Route::get('cost/Edit','CostController@editCost');
Route::get('cost/Delete','CostController@deleteCost');


//for searcing in cost page

Route::post('searchCost','CostController@search');
Route::get('searchCost','CostController@search');


//use for folder
Route::get('folder/Add','FolderController@addFolder');
Route::get('folder/Display','FolderController@displayFolder');
Route::get('folder/DisplayDetails','FolderController@displayDetailsFolder');
Route::post('folder/Save','FolderController@saveFolder');
Route::get('folder/Edit','FolderController@editFolder');
Route::get('folder/Delete','FolderController@deleteFolder');


//member_nominee_search

Route::post('folder/search','FolderController@searchFolder');
Route::get('folder/search','FolderController@searchFolder');




Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
