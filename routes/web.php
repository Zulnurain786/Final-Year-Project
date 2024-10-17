<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\pmocontroller;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\supervisercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//test
Route::view('/login','Error.login');
// Route::get('download-all-pdf',[pmocontroller::class,'downloadallPdf'])->name('PMO.download-all-pdf');


Route::view('PMO/forgetpassword','forgetpassword.pmoforgetpassword');
Route::post('PMO/forgetpassword',[pmocontroller::class,'forgetpassword'])->name('PMO.forgetpassword');

Route::get('PMO/recoverpassword/{id}',[pmocontroller::class,'recoverpassword'])->name('PMO.recoverpassword');
Route::post('/resetpassword',[pmocontroller::class,'resetpassword'])->name('PMO.resetpassword');

Route::group(['middleware' => ['logincheck']], function () {

Route::view('/','PMO.login');
Route::post('pmologin',[logincontroller::class,'pmologin'])->name('PMO.login');

Route::view('/student-login','Student.login');
Route::post('grouplogin',[logincontroller::class,'grouplogin'])->name('Student.login');

Route::view('/supervisor-login','Superviser.login');
Route::post('superviserlogin',[logincontroller::class,'supervisorlogin'])->name('Superviser.login');
});
// Route::get('/k', function () {
//     return view('Superviser.purposel-action-for-supervisor');
// });
// Route::get('/c', function () {
//     return view('pmo.home');
// });
Route::group(['middleware' => ['loginmiddleware']], function () {
    Route::prefix('PMO')->group(function () {
        ////index
        Route::get('/home', [pmocontroller::class,'index'])->name('PMO.home');
        ////student
        Route::get('/add-students-by-excel',[pmocontroller::class,'addstudentexcel'])->name("PMO.addstudentexcel");
        Route::post('/addstudentbyexcel',[pmocontroller::class,'addstudentbyexcel'])->name("PMO.addstudentbyexcel");
        Route::get("/add-student",[pmocontroller::class,'addstudent'])->name('PMO.addstudent');
        Route::post("/addstudentrecord",[pmocontroller::class,'addstudentrecord'])->name('PMO.addstudentrecord');
        Route::get("/updatestudentrecord/{id}",[pmocontroller::class,'updatestudentrecord'])->name('PMO.updatestudentrecord');
        Route::post("/saveupdatestudentrecord",[pmocontroller::class,'saveupdatestudentrecord'])->name('PMO.saveupdatestudentrecord');
        Route::get("/deletestudentrecord/{id}",[pmocontroller::class,'deletestudentrecord'])->name('PMO.deletestudentrecord');
        Route::get("/showstudentaccordingsession/{session}",[pmocontroller::class,'showstudentaccordingsession'])->name('PMO.showstudentaccordingsession');
        Route::get("/selectstudentrecordnotingroup/{session}",[pmocontroller::class,'selectstudentrecordnotingroup'])->name('PMO.selectstudentrecordnotingroup');
        ////groups
        Route::get("/all-group-login",[pmocontroller::class,'allgrouplogin'])->name('PMO.allgrouplogin');
        Route::get("/add-group-login",[pmocontroller::class,'addgrouploginview'])->name('PMO.addgrouploginview');
        Route::get("/dactivategrouplogin/{id}",[pmocontroller::class,'dactivategrouplogin'])->name('PMO.dactivategrouplogin');
        Route::post("/addgrouplogin",[pmocontroller::class,'addgrouplogin'])->name('PMO.addgrouplogin');
        Route::get("/updategrouplogin/{id}",[pmocontroller::class,'updategrouplogin'])->name('PMO.updategrouplogin');
        Route::get("/deletegrouplogin/{id}",[pmocontroller::class,'deletegrouplogin'])->name('PMO.deletegrouplogin');
        Route::post("/updatesavegrouplogin",[pmocontroller::class,'updatesavegrouplogin'])->name('PMO.updatesavegrouplogin');
        Route::get("/showgrouploginaccordingsession/{sessoion}",[pmocontroller::class,'showgrouploginaccordingsession'])->name('PMO.showgrouploginaccordingsession');
        Route::get("/selectgroupaccordingsession/{sessoion}",[pmocontroller::class,'selectgroupaccordingsession'])->name('PMO.selectgroupaccordingsession');
        Route::get("/Mid-Marks",[pmocontroller::class,'midmarks'])->name('PMO.midmarks');
        Route::get("/Finel-Marks",[pmocontroller::class,'finelmarks'])->name('PMO.finelmarks');
        Route::get('/all-students',[pmocontroller::class,'allstudentrecord'])->name('PMO.allstudentrecord');
        Route::get('/allstudentrecord_not_in_group',[pmocontroller::class,'allstudentrecord_not_in_group'])->name('PMO.allstudentrecord_not_in_group');
        Route::get('/purposel-update/{id}',[pmocontroller::class,'purposelupdate'])->name('PMO.purposelupdate');
        Route::post('/saveupdatepreliminarypurposel',[pmocontroller::class,'saveupdatepreliminarypurposel'])->name('PMO.saveupdatepreliminarypurposel');
        Route::get('/all-group',[pmocontroller::class,'allgroupsrecord'])->name('PMO.allgroupsrecord');
        Route::get('/group-detail/{id}',[pmocontroller::class,'grouprecord'])->name('PMO.grouprecord');
        Route::get('/updategroup/{id}',[pmocontroller::class,'updategroup'])->name('PMO.updategroup');
        Route::post('/saveupdategroup',[pmocontroller::class,'saveupdategroup'])->name('PMO.saveupdategroup');
        Route::get('/deletefromgroup/{id}/{regno}',[pmocontroller::class,'deletefromgroup'])->name('PMO.deletefromgroup');
        Route::get('/studentsubmiteditems/{id}',[pmocontroller::class,'studentsubmiteditems'])->name('PMO.studentsubmiteditems');
        Route::post('/groupsubmiteditem',[pmocontroller::class,'groupsubmiteditem'])->name('PMO.groupsubmiteditem');
        //superviser
        Route::get("/add-superviser",[pmocontroller::class,'addsuperviser'])->name('PMO.superviser');
        Route::post("/addnewsuperviser",[pmocontroller::class,'addnewsuperviser'])->name('PMO.addnewsuperviser');
        Route::get("/enrollagainsuperviser/{id}/{year}",[pmocontroller::class,'enrollagainsuperviser'])->name('PMO.enrollagainsuperviser');
        Route::get("/deletesuperviser/{id}",[pmocontroller::class,'deletesuperviser'])->name('PMO.deletesuperviser');
        Route::get("/updatesuperviser/{id}",[pmocontroller::class,'updatesuperviser'])->name('PMO.updatesuperviser');
        Route::post("/updatesavesuperviser",[pmocontroller::class,'updatesavesuperviser'])->name('PMO.updatesavesuperviser');
        Route::get("/showsuperviseraccordingsession/{session}",[pmocontroller::class,'showsuperviseraccordingsession'])->name('PMO.showsuperviseraccordingsession');
        Route::get("/dactivatesuperviser/{id}",[pmocontroller::class,'dactivatesuperviser'])->name('PMO.dactivatesuperviser');
        Route::get("/all-superviser",[pmocontroller::class,'allsuperviser'])->name('PMO.allsuperviser');
        Route::get("/all-sessions-of-superviser/{id}",[pmocontroller::class,'allsessionofsuperviser'])->name('PMO.allsessionofsuperviser');
        Route::get("/deletesuperviserfromsession/{id}",[pmocontroller::class,'deletesuperviserfromsession'])->name('PMO.deletesuperviserfromsession');

        ////file share
        Route::get('/share-file',[pmocontroller::class,'sharefile'])->name('PMO.sharefile');
        Route::get('/view-all-file',[pmocontroller::class,'viewallfile'])->name('PMO.viewallfile');
        Route::post('/fileuploud',[pmocontroller::class,'fileuploud'])->name('PMO.fileuploud');
        Route::post('/fileuploudindividule',[pmocontroller::class,'fileuploudindividule'])->name('PMO.fileuploudindividule');
        Route::get('/deletefile/{id}',[pmocontroller::class,'deletefile'])->name('PMO.deletefile');
        Route::get('/openFile/{id}',[pmocontroller::class,'openFile'])->name('PMO.openFile');
        //documentation
        Route::get('/studentdocopen/{id}',[pmocontroller::class,'studentdocopen'])->name('PMO.studentdocopen');
        //session
        Route::get('/create-session',[pmocontroller::class,'createsession'])->name('PMO.createsession');
        Route::post('/addsession',[pmocontroller::class,'addsession'])->name('PMO.addsession');
        Route::get('/deletesession/{id}',[pmocontroller::class,'deletesession'])->name('PMO.deletesession');
        //pmo's
        Route::get('/add-pmo',[pmocontroller::class,'addpmo'])->name('PMO.addpmo');
        Route::post('/addnewpmo',[pmocontroller::class,'addnewpmo'])->name('PMO.addnewpmo');
        Route::get('/all-pmo',[pmocontroller::class,'allpmo'])->name('PMO.allpmo');
        Route::get('/showpmoaccordingsession/{session}',[pmocontroller::class,'showpmoaccordingsession'])->name('PMO.showpmoaccordingsession');
        Route::get('/updatepmo/{id}',[pmocontroller::class,'updatepmo'])->name('PMO.updatepmo');
        Route::get('/updateprofile',[pmocontroller::class,'updateprofile'])->name('PMO.updateprofile');
        Route::get('/deletepmo/{id}',[pmocontroller::class,'deletepmo'])->name('PMO.deletepmo');
        Route::get('/dactivatepmo/{id}',[pmocontroller::class,'dactivatepmo'])->name('PMO.dactivatepmo');
        Route::post('/updatepmosave',[pmocontroller::class,'updatepmosave'])->name('PMO.updatepmosave');
        //logout
        Route::get('/logout',[pmocontroller::class,'logout'])->name('PMO.logout');
        //news
        Route::post('/addnews',[pmocontroller::class,'addnews'])->name('PMO.addnews');
        Route::get('/readnews',[pmocontroller::class,'readnews'])->name('PMO.readnews');
        Route::get('/deletenews',[pmocontroller::class,'deletenews'])->name('PMO.deletenews');
        ////form's
        Route::get('/defanceform/{id}',[pmocontroller::class,'defanceform'])->name('PMO.defanceform');
        Route::get('/finalform/{id}',[pmocontroller::class,'finalform'])->name('PMO.finalform');
        Route::get('/midEvaform/{id}',[pmocontroller::class,'midEvaform'])->name('PMO.midEvaform');
        Route::get('/meetingform/{id}',[pmocontroller::class,'meetingform'])->name('PMO.meetingform');
    });
});
Route::group(['middleware' => ['studentloginmiddleware']], function () {
    Route::prefix('Student')->group(function () {
        Route::get('/home', [studentcontroller::class,'index'])->name('Student.home');
        // Route::get('/login', [studentcontroller::class,'login'])->name('Student.login');
        Route::get('/profile', [studentcontroller::class,'profile'])->name('Student.profile');
        Route::post('/updategrouplogin', [studentcontroller::class,'updategrouplogin'])->name('Student.updategrouplogin');
        ////student group
        Route::get('/select-group-member', [studentcontroller::class,'selectgroupmember'])->name('Student.selectgroupmember');
        Route::post('/creategroup', [studentcontroller::class,'creategroup'])->name('Student.creategroup');
        Route::get('/Preliminary-Purposel', [studentcontroller::class,'preliminarypurposel'])->name('Student.preliminarypurposel');
        Route::post('/addpreliminarypurposel', [studentcontroller::class,'addpreliminarypurposel'])->name('Student.addpreliminarypurposel');
        Route::get('/meeting-slote', [studentcontroller::class,'meetingslote'])->name('Student.meetingslote');
        Route::get('/share-file', [studentcontroller::class,'Sharefile'])->name('Student.Sharefile');
        Route::get('/view-file', [studentcontroller::class,'viewfile'])->name('Student.viewfiLE');
        Route::get('/view-marks', [studentcontroller::class,'viewmarks'])->name('Student.viewmarks');
        Route::get('/project-status', [studentcontroller::class,'projectstatus'])->name('Student.projectstatus');
        Route::get('/readnews', [studentcontroller::class,'readnews'])->name('Student.readnews');
         //logout
        Route::get('/logout',[studentcontroller::class,'logout'])->name('Student.logout');
         //progress
        Route::get('/addprogress',[studentcontroller::class,'addprogress'])->name('Student.addprogress');
        ///file
        Route::get('/openFile/{id}',[pmocontroller::class,'openFile'])->name('Student.openFile');
        Route::get('/deletefile/{id}',[pmocontroller::class,'deletefile'])->name('Student.deletefile');
        Route::get('/opendoc/{id}',[studentcontroller::class,'opendoc'])->name('Student.opendoc');
        Route::get('/deletedoc/{id}',[studentcontroller::class,'deletedoc'])->name('Student.deletedoc');
        Route::post('/uploudfile',[studentcontroller::class,'uploudfile'])->name('Student.uploudfile');
        Route::post('/uplouddocumentation',[studentcontroller::class,'uplouddocumentation'])->name('Student.uplouddocumentation');
        ///news
        Route::get('/NewNews', [studentcontroller::class,'NewNews'])->name('Student.NewNews');
        Route::get('/allnewsreaded', [studentcontroller::class,'allnewsreaded'])->name('Student.allnewsreaded');

    });
});
Route::group(['middleware' => ['supervisorloginmiddleware']], function () {
    Route::prefix('Superviser')->group(function () {
        Route::get('/home', [supervisercontroller::class,'index'])->name('Superviser.home');
        Route::get('/profile', [supervisercontroller::class,'profile'])->name('Superviser.profile');
        Route::post('/updateprofile', [supervisercontroller::class,'updateprofile'])->name('Superviser.updateprofile');
        // Route::get('/login', [supervisercontroller::class,'login'])->name('Superviser.login');
        Route::get('/group-purposels', [supervisercontroller::class,'groupspurposel'])->name('Superviser.groupspurposel');
        Route::get('/leading-group', [supervisercontroller::class,'leadinggroups'])->name('Superviser.leadinggroups');
        Route::get('/action-on-purposel/{id}', [supervisercontroller::class,'purposelaction'])->name('Superviser.purposelaction');
        Route::get('/group-detail', [supervisercontroller::class,'groupdetail'])->name('Superviser.groupdetail');
        Route::get('/group-progress', [supervisercontroller::class,'groupprogress'])->name('Superviser.groupprogress');
        //fileshare
        Route::get('/share-file', [supervisercontroller::class,'sharefile'])->name('Superviser.sharefile');
        Route::post('/uploud-file', [supervisercontroller::class,'uploudfile'])->name('Superviser.uploudfile');
        Route::get('/view-file', [supervisercontroller::class,'viewfile'])->name('Superviser.viewfile');
        Route::get('/deletefile/{id}',[pmocontroller::class,'deletefile'])->name('Superviser.deletefile');
        Route::get('/openFile/{id}',[pmocontroller::class,'openFile'])->name('Superviser.openFile');
        Route::post('/uploudindividualfile',[supervisercontroller::class,'uploudindividualfile'])->name('Superviser.uploudindividualfile');
        //meetings
        Route::get('/meeting-slot', [supervisercontroller::class,'meetingslot'])->name('Superviser.meetingslot');
        Route::post('/add-meeting-slot', [supervisercontroller::class,'addmeetingslot'])->name('Superviser.addmeetingslot');
        Route::get('/deletemeetingtime/{id}', [supervisercontroller::class,'deletemeetingtime'])->name('Superviser.deletemeetingtime');
        //New news
        Route::get('/NewNews', [supervisercontroller::class,'NewNews'])->name('Superviser.NewNews');
        Route::get('/readnews', [supervisercontroller::class,'readnews'])->name('Superviser.readnews');
        Route::get('/allnewsreaded', [supervisercontroller::class,'allnewsreaded'])->name('Superviser.allnewsreaded');
         //logout
         Route::get('/logout',[supervisercontroller::class,'logout'])->name('Superviser.logout');
         //purposel accept or reject
         Route::post('/supervisoraction',[supervisercontroller::class,'supervisoraction'])->name('Superviser.supervisoraction');
         //group details
        Route::get('/group-details/{id}',[supervisercontroller::class,'grouprecords'])->name('Superviser.grouprecords');
        Route::get("/supervisorselectgroupaccordingsession/{sessoion}",[supervisercontroller::class,'supervisorselectgroupaccordingsession'])->name('Superviser.supervisorselectgroupaccordingsession');
         //Project Weight
        Route::get('/assign-weight/{id}',[supervisercontroller::class,'assignweight'])->name('Superviser.assignweight');
        Route::post('/saveweightform',[supervisercontroller::class,'saveweightform'])->name('Superviser.saveweightform');
        Route::get('/assign-values/{id}',[supervisercontroller::class,'assignvalues'])->name('Superviser.assignvalues');
        Route::post('/saveassignvalues',[supervisercontroller::class,'saveassignvalues'])->name('Superviser.saveassignvalues');
        ////group doc
        Route::get('/studentdocopen/{id}',[pmocontroller::class,'studentdocopen'])->name('Superviser.studentdocopen');

    });
});

