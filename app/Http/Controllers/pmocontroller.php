<?php

namespace App\Http\Controllers;
//Excel
use App\Imports\StudentRecordImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
//Validater
use Illuminate\Support\Facades\Validator;
//session
use Illuminate\Support\Facades\Session;

//models
use App\Models\pmo;
use App\Models\fileuploud;
use App\Models\news;
use App\Models\groupsubmiteditems;
use App\Models\sessionmodel;
use App\Models\Personrole;
use App\Models\superviser;
use App\Models\supervisersession;
use App\Models\allgroupslogin;
use App\Models\studentsrecords;
use App\Models\Studentgroups;
use App\Models\preliminaryproposal;
use App\Models\projectdocumentation;
use App\Models\supervisormeetingstime;
use App\Models\projectweightage;

//date
use Carbon\Carbon;
//pdf
use Barryvdh\DomPDF\Facade\Pdf;
//open file
use Illuminate\Support\Facades\Storage;
//response return
use Illuminate\Support\Facades\Response;
//mail
use Mail;
use App\Mail\forgetpassword;
//random number
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
//jobs
//zip
use Symfony\Component\HttpFoundation\StreamedResponse;
use ZipArchive;
use Illuminate\Validation\Rule;




class pmocontroller extends Controller
{
    public function forgetpassword(Request $request)
    {
        try
        {
            $email = pmo::where('email', $request->email)->first();
            if($email) {
                // return $email;
                $tok = random_int(100000, 999999);
                $email->passwordresettoken = $tok;
                $email->save();
                $id=$email->id;

                $maildata = [
                    'title' => 'GIMS',
                    'body' =>  $tok,
                ];

                try {
                    // return $email->email;
                    Mail::to($email->email)->send(new forgetpassword($maildata));     
                    $email->passwordresettoken = $tok;
                    $email->save();
                    $id=$email->id;           
                    // dispatch(function() use (&$email,&$maildata){
                    //     Mail::to($email->email)->send(new forgetpassword($maildata));                
                    // })->delay(now());
                } catch (\Exception $e) {
                    // Handle mail sending error
                    return back()->with('error','Error sending email. Please try again.');
                }

                // Use $email by reference in the closure
                dispatch(function() use (&$email) {
                    $email->passwordresettoken = null;
                    $email->save();
                })->delay(now()->addSeconds(60));

                return redirect("PMO/recoverpassword/{$id}")->with('success', 'Password reset link sent successfully.');
            } else {
                // Handle case where email doesn't exist
                return back()->with('error','Email address not found.');
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function recoverpassword($id)
    {
        try
        {
            return view('forgetpassword.recoverpassword', compact('id'))->with('success', 'Password reset link sent successfully.');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function resetpassword(Request $request){
        try{
            $request->validate([
                'password' => 'required|min:8',
                'token' => 'required|min:6',
            ], [
                'password.required' => 'Password is required!',
                'password.min' => 'Password must be at least 8 characters long.',
                'token.required' => 'Token is required!',
                'token.min' => 'Token must be at least 6 characters long.',
            ]);
            $data = pmo::find($request->id);
            if($data)
            {
                if($data->passwordresettoken != null && $data->passwordresettoken == $request->token)
                {
                    $data->password=$request->password;
                    $data->passwordresettoken=null;
                    if($data->save())
                    {
                    return redirect('/')->with('success', 'Your Password has been changed!');
                    }
                }
                else
                {
                    return back()->with('error', 'Token Incorrect!');
                }
            }
            else
            {
                return back()->with('error', 'Something went wrong!');
            }
            
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
       
    }
    public function logout(Request $request){
        try
        {
            Session::flush();
            return redirect('/');
            // return view('PMO.login');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function index(Request $request)
    {
        try
        {
            $allstudents=studentsrecords::count();
            $allgroups=Studentgroups::count();
            $allsupervisor=superviser::count();
            $id= Session::get('pmoid');
            $allfiles=fileuploud::where('sharedby','pmo')->where('sharedbyid',$id)->count();
            return view('PMO.home',compact('allstudents','allgroups','allsupervisor','allfiles'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function addstudentexcel(Request $request){
        try
        {
            return view('PMO.add-students-by-excel');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function addstudentbyexcel(Request $request){
        try{
            $request->validate([
                'file' => 'required|mimes:xlsx,xls', // Validate file type (xlsx, xls)
            ]);
            Excel::import(new StudentRecordImport, $request->file('file'));
            return back()->with('success', 'All Excel Student Added.');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error with Row-NO:' . $e->getMessage());
        }
    }
    public function addstudent(Request $request){
        try{
            $session=sessionmodel::all();
           return view('PMO.add-student',compact('session'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function addstudentrecord(Request $request){
        try { 
            $validatedData = $request->validate([
                'email' => 'required|email|unique:studentsrecords,email',
                'session' => 'required',
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                'department' => 'required',
                'pnumber' => 'required|numeric|min:11',
                'regno' => 'required|unique:studentsrecords,regno',
            ], [
                'email.required' => 'Email is required.',
                'email.email' => 'Please enter a valid email address.',
                'session.required' => 'Session is required.',
                'name.required' => 'Name is required.',
                'name.string' => 'Name contain only alphabatics.',
                'name.regex' => 'Name contain only alphabatics.',
                'department.required' => 'Department is required.',
                'pnumber.required' => 'Phone Number is required.',
                'pnumber.min' => 'Phone Number is minimum 11 digits.',
                'regno.required' => 'Registration is required.',
                'regno.unique' => 'Registration is unique.',
            ]);
              $addstudent=new studentsrecords;
               $addstudent->name=$validatedData['name'];
               $addstudent->email=$validatedData['email'];
               $addstudent->session=$validatedData['session'];
               $addstudent->department=$validatedData['department'];
               $addstudent->pnumber=$validatedData['pnumber'];
               $addstudent->regno=$validatedData['regno'];
               $addstudent->pmo_id = Session::get('pmoid');
               $addstudent->save();
            return back()->with('success', 'Student added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to add Student: ' . $e->getMessage());
        }
    }
    public function updatestudentrecord($id){
        try{
            $studentrecord=studentsrecords::find($id);
            $session=sessionmodel::all();
            return view('PMO.update-student',compact('studentrecord','session'));
       }
       catch(\Exception $e)
       {
           return back()->with('error', 'Failed to load data'. $e->getMessage());
       }
    }
    public function saveupdatestudentrecord(Request $request){
        try { 
            // Validation rules for email and password fields
            $validatedData = $request->validate([
                'email' => 'required|email|unique:studentsrecords,email,'.$request->input('id'),
                'session' => 'required',
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                'department' => 'required',
                'pnumber' => 'required|min:11',
                'regno' => 'required|unique:studentsrecords,regno,'.$request->input('id'),
            ], [
                'email.required' => 'Email is required.',
                'email.email' => 'Please enter a valid email address.',
                'session.required' => 'Session is required.',
                'name.required' => 'Name is required.',
                'name.string' => 'Name contain only alphabatics.',
                'name.regex' => 'Name contain only alphabatics.',
                'department.required' => 'Department is required.',
                'pnumber.required' => 'Phone Number is required.',
                'pnumber.min' => 'Phone Number is minimum 11 digits.',
                'regno.required' => 'Registration is required.',
                'regno.unique' => 'Registration No is unique.',

            ]);
              $updatestudent=studentsrecords::find($request->input('id'));
               $updatestudent->name=$validatedData['name'];
               $updatestudent->email=$validatedData['email'];
               $updatestudent->session=$validatedData['session'];
               $updatestudent->department=$validatedData['department'];
               $updatestudent->pnumber=$validatedData['pnumber'];
               $updatestudent->regno=$validatedData['regno'];
               // Save the data to the database
               $updatestudent->save();
            return back()->with('success', 'Student Updated successfully.');
        } catch (\Exception $e) {
            // Handle specific database-related errors or any other exceptions here
            return back()->with('error', 'Failed to Update Student: ' . $e->getMessage());
        }
       
    }
    public function deletestudentrecord($id){
        try{
            $studentrecord=studentsrecords::find($id);
            $studentrecord->delete();
            return back()->with('success', 'Student delete successfully.');
       }
       catch(\Exception $e)
       {
           return back()->with('error', 'Failed to delete student'. $e->getMessage());
       }
    }
    public function allstudentrecord(Request $request){
        try{
            $allstudentrecord=studentsrecords::all();
            $session=sessionmodel::all();
            return view('PMO.all-students',compact('allstudentrecord','session'));
       }
       catch(\Exception $e)
       {
           return back()->with('error', 'Failed to load data'. $e->getMessage());
       }
    }
    public function allstudentrecord_not_in_group(Request $request){
        try{
            $allstudentrecord=studentsrecords::where('enrolledingroup',0)->get();
            $session=sessionmodel::all();
            return view('PMO.all-students-not-in-group',compact('allstudentrecord','session'));
       }
       catch(\Exception $e)
       {
           return back()->with('error', 'Failed to load data'. $e->getMessage());
       }
    }
    public function showstudentaccordingsession($session){
        try { 
        $studentrecord=studentsrecords::where('session',$session)->get();
        return response()->json($studentrecord);
        }
        catch(\Exception $e)
        {
            return back()->with('error', 'Failed to record found.'. $e->getMessage());
        }
    }
    public function selectstudentrecordnotingroup($session){
        try { 
        $studentrecord=studentsrecords::where('session',$session)
        ->where('enrolledingroup','0')->get();
        return response()->json($studentrecord);
        }
        catch(\Exception $e)
        {
            return back()->with('error', 'Failed to record found.'. $e->getMessage());
        }
        
    }
    public function purposelupdate($id){
        try
        {
            $purposelrecord=preliminaryproposal::find($id);
            $currentYear = Carbon::now()->year;
            $allsupervisercurrentsession=supervisersession::where('session',$currentYear)->get();
            if($allsupervisercurrentsession)
            {
                $allsuperviser=[];
                foreach($allsupervisercurrentsession as $item)
                {
                  $superviser=superviser::where('id',$item->superviserid)->first();
                  $allsuperviser[] = array_merge($allsuperviser, $superviser->toArray());
                }
            }
            $grouprecord=Studentgroups::find($purposelrecord->groupid);
                $studentregnos = [];
                if($grouprecord)
                {
                    if($grouprecord->m1regno!=0)
                      {
                          $records=studentsrecords::where('regno',$grouprecord->m1regno)->first();
                          $studentregnos[] = array_merge($studentregnos, $records->toArray());
                      }
                    if($grouprecord->m2regno!=0)
                      {
                          $records=studentsrecords::where('regno',$grouprecord->m2regno)->first();
                          $studentregnos[] = array_merge($studentregnos, $records->toArray());
                      }
                    if($grouprecord->m3regno!=0)
                      {
                          $records=studentsrecords::where('regno',$grouprecord->m3regno)->first();
                          $studentregnos[] = array_merge($studentregnos, $records->toArray());
                      }
                      return view('PMO.purposel-update',compact('purposelrecord','studentregnos','allsuperviser'));
                }
        }
        catch(\Exception $e)
        {
            return back()->with('error', 'Failed to record found.'. $e->getMessage());
        }
       
    }
    public function studentsubmiteditems($id){
        try
        {
            $grouprecord=Studentgroups::find($id);
            $submiteditems = groupsubmiteditems::where('groupid', $grouprecord->id)->first(); 
            $studentregnos = [];
            if($grouprecord)
            {
            if($grouprecord->m1regno!=0)
                {
                    $records=studentsrecords::where('regno',$grouprecord->m1regno)->first();
                    $studentregnos[] = array_merge($studentregnos, $records->toArray());
                }
            if($grouprecord->m2regno!=0)
                {
                    $records=studentsrecords::where('regno',$grouprecord->m2regno)->first();
                    $studentregnos[] = array_merge($studentregnos, $records->toArray());
                }
            if($grouprecord->m3regno!=0)
                {
                    $records=studentsrecords::where('regno',$grouprecord->m3regno)->first();
                    $studentregnos[] = array_merge($studentregnos, $records->toArray());
                }
                return view('PMO.submited-items',compact('studentregnos',"submiteditems","grouprecord"));
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function groupsubmiteditem(Request $request){
        try
        {
            $submiteditems = groupsubmiteditems::where('groupid', $request->id)->first(); // Retrieve the model instance

            if ($submiteditems) {
                $bookletChecked = $request->has('booklet'); 
                $flex = $request->has('flex'); 
                $cd = $request->has('cds'); 
                
                // Update the model instance with the new values
                $submiteditems->groupid = $request->id;
                $submiteditems->booklet = $bookletChecked ? 1 : 0;
                $submiteditems->flex = $flex ? 1 : 0;
                $submiteditems->CD = $cd ? 1 : 0;
                $submiteditems->pmo_id = Session::get('pmoid');

                if ($submiteditems->save()) {
                    return back()->with('success', 'Item Submitted');
                }
            } else {
                $submiteditems=new groupsubmiteditems;
                $bookletChecked = $request->has('booklet'); 
                $flex = $request->has('flex'); 
                $cd = $request->has('cds'); 
                
                // Update the model instance with the new values
                $submiteditems->groupid = $request->id;
                $submiteditems->booklet = $bookletChecked ? 1 : 0;
                $submiteditems->flex = $flex ? 1 : 0;
                $submiteditems->CD = $cd ? 1 : 0;
                $submiteditems->pmo_id = Session::get('pmoid');
            
                if ($submiteditems->save()) {
                    return back()->with('success', 'Item Submitted');
                }
            }
             return back()->with('success', 'All Item Changed To Empty!');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function saveupdatepreliminarypurposel(Request $request){
        try
        {
            $request->validate([
                'superviser' => 'required',
                'projectname' => 'required',
                'electivecourses' => 'required',
                'plt' => 'required',
            ], [
                'email.required' => 'Select Superviser is required.',
                'projectname.required' => 'Project Name is required.',
                'electivecourses.required' => 'Pleace Write Elective Courses.',
                'plt.required' => 'Pleace Write Tools Programing languages.',
            ]);
            $addpurposel=preliminaryproposal::find($request->input('id'));
            $addpurposel->superviserid=$request->input('superviser');
            $addpurposel->projectname=$request->input('projectname');
            $addpurposel->electivecourses=$request->input('electivecourses');
            $addpurposel->programminglanguagetools=$request->input('plt');
            if($addpurposel->save())
            {
                return back()->with('success', 'Preliminary Proposal Form is Uppdated.');
            }
            else
            {
                return back()->with('error', 'Preliminary Proposal Form Not Updated.');
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function addgrouploginview(Request $request){
        try{
            $allsession=sessionmodel::all();
            return view('PMO.add-student-login',compact('allsession'));
       }
       catch(\Exception $e)
       {
           return back()->with('error', 'Failed to load sessions.'. $e->getMessage());
       }
    }
    public function allgrouplogin(Request $request){
        try{
             // Fetch all records from the 'allgroupslogin' table
            $allgrouplogin = allgroupslogin::all();
            $session = sessionmodel::all();
            // Return a view named 'PMO.all-group-login', passing the fetched records to the view
            return view('PMO.all-group-login', compact('allgrouplogin','session'));
        }
        catch(\Exception $e)
        {
            return back()->with('error', 'Failed to load group logins.'. $e->getMessage());
        }
    
    }
    public function allgroupsrecord(Request $request){
        try
        {
            // $currentYear = Carbon::now()->year;
            // $allsupervisercurrentsession=supervisersession::where('session',$currentYear)->get();
            // if($allsupervisercurrentsession)
            // {
            //     $allsuperviser=[];
            //     foreach($allsupervisercurrentsession as $item)
            //     {
            //       $superviser=superviser::where('id',$item->superviserid)->first();
            //       $allsuperviser[] = array_merge($allsuperviser, $superviser->toArray());
            //     }
            // }
            // $allGroupRecords = Studentgroups::with('preliminaryProposal.supervisor')->get();
            // dd($allGroupRecords);
            $session=sessionmodel::all();
            $allgrouprecord=preliminaryproposal::where('purposelstatus','approved')->get();
            // if($allgrouprecord)
            // {
            //     foreach($allgrouprecord as $item)
            //     {
            //         if()
            //     }
            // }
            // return view('PMO.all-group',compact('allgrouprecord'));

            // $studentregnos = [];
           
            if($allgrouprecord)
            {
            //     foreach($allgrouprecord as $item)
            //     {
            //         // dd($item->allgrouplogin->email);
            //         // dd($item->studentsrecords->name);
            //         // dd($item->preliminaryProposal->id);

            //         // dd($item->preliminaryProposal->supervisor);
            //         // dd($item->preliminaryProposal->supervisor);
            //         // dd($item->allGroupLogin->session);
            //         if($item->m1regno!=0)
            //         {
            //             $records=studentsrecords::where('regno',$item->m1regno)->first();
            //             $studentregnos[] = array_merge($studentregnos, $records->toArray());
            //         }
            //         // if($item->m2regno!=0)
            //         // {
            //         //     $records=studentsrecords::where('regno',$item->m2regno)->first();
            //         //     $studentregnos[] = array_merge($studentregnos, $records->toArray());
            //         // }
            //         // if($item->m3regno!=0)
            //         // {
            //         //     $records=studentsrecords::where('regno',$item->m3regno)->first();
            //         //     $studentregnos[] = array_merge($studentregnos, $records->toArray());
            //         // }
            //         // $records=preliminaryproposal::find($item->id);
            //         // $studentregnos[] = array_merge($studentregnos, $records->toArray());
            //         // dd($studentregnos);
            //     }
                // dd($studentregnos);
                // foreach ($studentregnos as $record) {
                //     if (isset($record['id'])) {
                //         // Retrieve the model instance based on the ID
                //         $studentRecord = studentsrecords::find($record['id']);
            
                //         // Check if the record was found
                //         if ($studentRecord) {
                //             // Access the preliminaryProposal relationship and its supervisor
                //             $supervisor = $studentRecord->preliminaryProposal->supervisor;
                            
                //             // Now you can use $supervisor as needed
                //             dd($supervisor);
                //         }
                //     }
                // }
                // dd($studentregnos);
                // foreach($studentregnos as $item)
                // {
                //     $supervisor = $item['id']->preliminaryProposal->supervisor;
                //     dd($supervisor);
                // }
                // dd($studentregnos);
                // return $allgrouprecord->studentgroup->studentsrecords;
                return view('PMO.all-group',compact('allgrouprecord','session'));
            }
            else 
            {
                return back()->with('error', 'Please Firstly Create Your group');
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
        
        return view('PMO.all-group');
    }
    public function selectgroupaccordingsession($session){
        try
        {
            $allgrouprecord = preliminaryproposal::where('purposelstatus', 'approved')->get();
            $studentrecords = []; // Define an empty array to hold all student records
            
            if ($allgrouprecord) {
                foreach ($allgrouprecord as $item) {
                    $count=0;
                    if($item->studentgroup->session == $session)
                    {
                        $record=projectweightage::where('purposelid',$item->id)->first();
                        if($record)
                        {
                            $weightedTopics=json_decode($record->keyNvalue,true);
                            $personProgress=json_decode($record->valuesofweighatage,true);
                            $totalWeightedProgress = 0;
                            $totalWeight = array_sum($weightedTopics);

                            // Calculate weighted progress for the person
                            foreach ($weightedTopics as $topic => $weight) {
                                if (isset($personProgress[$topic])) {
                                    // Calculate weighted progress for each topic
                                    $weightedProgress = ($personProgress[$topic] / 100) * $weight;
                                    $totalWeightedProgress += $weightedProgress;
                                }
                            }
                            // Calculate overall progress percentage
                            if ($totalWeight > 0) {
                                $overallProgress = ($totalWeightedProgress / $totalWeight) * 100;
                            } else {
                                $overallProgress = 0; // Default value if total weight is zero
                            }
                        }else {
                            $overallProgress = 0; // Default value if total weight is zero
                        }
                        $item->studentgroup->m1regno ? $count++ : '';
                        $item->studentgroup->m2regno ? $count++ : '';
                        $item->studentgroup->m3regno ? $count++ : '';
                        $item->studentgroup->studentdoc ? $abstractpath=$item->studentgroup->studentdoc->purposelabstract :$abstractpath = 0 ;
                        $item->studentgroup->studentdoc ? $docpath=$item->studentgroup->studentdoc->documentation :$docpath = 0 ;
                        $clearancestatus=$item->studentgroup->submiteditems ? $item->studentgroup->submiteditems->booklet !== 0 && $item->studentgroup->submiteditems->CD !== 0 && $item->studentgroup->submiteditems->flex !== 0 ? 'Clear' : 'Pending' : 'Pending' ;
                        // Create an associative array for each student record
                        $studentrecord = [
                            'groupid' => $item->studentgroup->id,
                            'totalmembers' => $count,
                            'abstractpath' => $abstractpath,
                            'docpath' => $docpath,
                            'purposelid' => $item->id,
                            'projectid' => $item->studentgroup->allgrouplogin->projectid,
                            'name' => $item->studentgroup->studentsrecords->name,
                            'regno' => $item->studentgroup->studentsrecords->regno,
                            'pnumber' => $item->studentgroup->studentsrecords->pnumber,
                            'supervisor' => $item->supervisor->name,
                            'clearancestatus' => $clearancestatus,
                            'overallProgress' => $overallProgress,

                        ];
                
                        // Append the student record to the array of student records
                        $studentrecords[] = $studentrecord;
                    }
                }
                // dd($studentrecords);
                return response()->json($studentrecords);
                // return view('PMO.all-group',compact('studentregnos','allgrouprecord'));
            }
            else 
            {
                return back()->with('error', 'Please Firstly Create Your group');
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
        
        return view('PMO.all-group');
    }
    public function grouprecord($id){
        try
        {
            $grouprecord=Studentgroups::find($id);
            $studentregnos = [];
            if($grouprecord)
            {
                if($grouprecord->m1regno!=0)
                  {
                      $records=studentsrecords::where('regno',$grouprecord->m1regno)->first();
                      $studentregnos[] = array_merge($studentregnos, $records->toArray());
                  }
                if($grouprecord->m2regno!=0)
                  {
                      $records=studentsrecords::where('regno',$grouprecord->m2regno)->first();
                      $studentregnos[] = array_merge($studentregnos, $records->toArray());
                  }
                if($grouprecord->m3regno!=0)
                  {
                      $records=studentsrecords::where('regno',$grouprecord->m3regno)->first();
                      $studentregnos[] = array_merge($studentregnos, $records->toArray());
                  }
                // foreach($grouprecord as $item)
                // {
                //     if($item->regno!=0)
                //     {
                //         $records=studentsrecords::where('regno',$grouprecord->regno)->first();
                //         $studentregnos = array_merge($studentregnos, $records->toArray());
                //     }
                // }
                     return view('PMO.group-detail',compact('studentregnos'));
            }
            // dd($studentregnos );
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function deletefromgroup($id,$regno)
    {
        try
        {
            $studentrecord=studentsrecords::find($id);
            // Convert $regno to an array if it's a string
            $regnoArray = is_array($regno) ? $regno : [$regno];
            $studentgroup = Studentgroups::whereIn('m1regno', $regnoArray)
                            ->orWhereIn('m2regno', $regnoArray)
                            ->orWhereIn('m3regno', $regnoArray)
                            ->first();
            if($studentgroup->m1regno==$regno)
            {
                $studentgroup->groupmembers-=1;
                $studentrecord->enrolledingroup=0;
                $studentgroup->m1regno=0;
                $studentrecord->save();
                $studentgroup->save();
                return back()->with('success','Student Delete Successfully.');
            }
            elseif($studentgroup->m2regno==$regno)
            {
                $studentgroup->groupmembers-=1;
                $studentrecord->enrolledingroup=0;
                $studentgroup->m2regno=0;
                $studentrecord->save();
                $studentgroup->save();
                return back()->with('success','Student Delete Successfully.');
            }
            elseif($studentgroup->m3regno==$regno)
            {
                $studentgroup->groupmembers-=1;
                $studentrecord->enrolledingroup=0;
                $studentgroup->m3regno=0;
                $studentrecord->save();
                $studentgroup->save();
                return back()->with('success','Student Delete Successfully.');
            }
            else{
                return back()->with('error',"Group Leader Can't deleted.");
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function updategroup($id)
    {
        try
        {
            $grouprecord=Studentgroups::find($id);
            $currentYear = Carbon::now()->year;
            $allstudentrecord=studentsrecords::where('session',$currentYear)
            ->where('enrolledingroup', 0)
            ->get();
            // Convert $regno to an array if it's a string
            $studentregnos = [];
            if($grouprecord)
            {
                if($grouprecord->m1regno!=0)
                {
                    $records=studentsrecords::where('regno',$grouprecord->m1regno)->first();
                    $studentregnos[] = array_merge($studentregnos, $records->toArray());
                }
              if($grouprecord->m2regno!=0)
                {
                    $records=studentsrecords::where('regno',$grouprecord->m2regno)->first();
                    $studentregnos[] = array_merge($studentregnos, $records->toArray());
                }
              if($grouprecord->m3regno!=0)
                {
                    $records=studentsrecords::where('regno',$grouprecord->m3regno)->first();
                    $studentregnos[] = array_merge($studentregnos, $records->toArray());
                }
                // foreach($grouprecord as $item)
                // {
                //     if($item->regno!=0)
                //     {
                //         $records=studentsrecords::where('regno',$grouprecord->regno)->first();
                //         $studentregnos = array_merge($studentregnos, $records->toArray());
                //     }
                // }
            }
            return view('PMO.update-group-member',compact('studentregnos','allstudentrecord','id'));
            // if($studentgroup->m1regno==$regno)
            // {
            //     $studentrecord->enrolledingroup=0;
            //     $studentgroup->m1regno=0;
            //     return back()->with('success','Student Delete Successfully.');
            // }
            
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }

    }
    public function saveupdategroup(Request $request)
    {
        try
        {
            $selectedStudentIds=$request->input('states');
            $members = count($selectedStudentIds);
            if ($members > 3)
            {
                return back()->with('error','Maximum Selection of Member is 3.');
            }
            $grouprecord=Studentgroups::find($request->input('id'));
            // $currentYear = Carbon::now()->year;
            // $allstudentrecord=studentsrecords::where('session',$currentYear)
            // ->where('enrolledingroup', 0)
            // ->get();
            // Convert $regno to an array if it's a string
            // $studentregnos = [];
            // dd($selectedStudentIds);

            // dd($selectedStudentIds[0]);
            // if ($grouprecord->groupmembers == 0) {
            //     selectlenghtforupdatestudent = 3;
            // } else if (selectlenghtforupdatestudent == 1) {
            //     selectlenghtforupdatestudent = 2;
            // } else if (selectlenghtforupdatestudent == 2) {
            //     selectlenghtforupdatestudent = 1;
            // }
            if($grouprecord->groupmembers == 3)
            {
                return back()->with('error','Group already Completed.');
            }
            // dd($members);
                if(isset($selectedStudentIds[0])) {
                    // dd($selectedStudentIds[0]);
                    if($grouprecord->m1regno==0)
                    {
                        $grouprecord->groupmembers += 1;
                        $grouprecord->m1regno = $selectedStudentIds[0];
                        // dd($grouprecord->m1regno);
                    } 
                    elseif($grouprecord->m2regno==0)
                    {
                        $grouprecord->groupmembers += 1;
                        $grouprecord->m2regno = $selectedStudentIds[0];
                    }
                    elseif($grouprecord->m3regno==0)
                    {
                        $grouprecord->groupmembers += 1;
                        $grouprecord->m3regno = $selectedStudentIds[0];
                    }
                }
                if(isset($selectedStudentIds[1])) {
                    if($grouprecord->m1regno==0)
                    {
                        $grouprecord->groupmembers += 1;
                        $grouprecord->m1regno = $selectedStudentIds[1];
                        // dd($grouprecord->m1regno);
                    } 
                    elseif($grouprecord->m2regno==0)
                    {
                        $grouprecord->groupmembers += 1;
                        $grouprecord->m2regno = $selectedStudentIds[1];
                    }
                }
                if(isset($selectedStudentIds[2])) {
                    if($grouprecord->m3regno==0)
                    {
                        $grouprecord->groupmembers += 1;
                        $grouprecord->m3regno = $selectedStudentIds[2];
                    }
                }
                // dd($grouprecord);
                if($grouprecord->save())
                {
                    // dd($grouprecord);
                    foreach ($selectedStudentIds as $studentId) {
                        $studentRecord = studentsrecords::where('regno', $studentId)->first();
                        $studentRecord->enrolledingroup = 1;
                        $studentRecord->save();
                    }
                    return back()->with('success', 'Group Updated.');
                }
                else
                {
                    return back()->with('error', 'Group  Not Updated.');
                }
            }
            catch(\Exception $e)
            {
                return back()->with('error', 'Failed to record found.'. $e->getMessage());
            }
    }
    public function addgrouplogin(Request $request){
        try { 
            // Validation rules for email and password fields
            $validatedData = $request->validate([
                'projectid' => 'required|min:8',
                'password' => 'required|min:8',
                'session' => 'required',
            ], [
                'projectid.required' => 'ProjectID is required.',
                'projectid.min' => 'Please enter a valid ProjectID address.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',
                'session.required' => 'Session is required.',
            ]);
        
            // Create a new instance of allgroupslogin model
            $addgrouplogin = new allgroupslogin;
            
            // Assign values to the model instance from validated inputs
            $addgrouplogin->projectid = $validatedData['projectid'];
            $addgrouplogin->password = $validatedData['password'];
            $addgrouplogin->session = $validatedData['session'];
            $addgrouplogin->pmo_id = Session::get('pmoid');
        
            // Save the data to the database
            $addgrouplogin->save();
            return back()->with('success', 'Group login added successfully.');
        } catch (\Exception $e) {
            // Handle specific database-related errors or any other exceptions here
            return back()->with('error', 'Failed to add group login: ' . $e->getMessage());
        }
    
        // Redirect back to the previous page with success message
    }
    public function deletegrouplogin($id){
        try{
            $deletegrouplogin=allgroupslogin::find($id);
            $grouprecord=Studentgroups::where('loginid',$deletegrouplogin->id)->first();
            if($grouprecord)
            {
                if($grouprecord->studentsrecords)
                {
                    $record=studentsrecords::find($grouprecord->studentsrecords->id);
                    $record->enrolledingroup=0;
                    $record->save();
                }
                if($grouprecord->studentsrecord1)
                {
                    $record=studentsrecords::find($grouprecord->studentsrecord1->id);
                    $record->enrolledingroup=0;
                    $record->save();
                }
                if($grouprecord->studentsrecord2)
                {
                    $record=studentsrecords::find($grouprecord->studentsrecord2->id);
                    $record->enrolledingroup=0;
                    $record->save();
                }
            }
            $deletegrouplogin->delete();
            return back()->with('success', 'Group login deleted successfully.');
        }
        catch(\Exception $e)
        {
            return back()->with('error', 'Failed to delete group login.'. $e->getMessage());
        }
    }
    public function updategrouplogin($id){
        try { 
        $grouplogin=allgroupslogin::find($id);
        $allsession=sessionmodel::all();
        return view('PMO.update-group-login',compact('grouplogin','allsession'));
        }
        catch(\Exception $e)
        {
            return back()->with('error', 'Failed to record found.'. $e->getMessage());
        }
        
    }
    public function showgrouploginaccordingsession($session){
        try { 
        $grouplogin=allgroupslogin::where('session',$session)->get();
        return response()->json($grouplogin);
        }
        catch(\Exception $e)
        {
            return back()->with('error', 'Failed to record found.'. $e->getMessage());
        }
        
    }
    public function updatesavegrouplogin(Request $request){
        try{
             // Validation rules for email and password fields
                $validatedData = $request->validate([
                    'projectid' => 'required|min:8',
                    'password' => 'required|min:8',
                    'session' => 'required',
                ], [
                    'projectid.required' => 'ProjectID is required.',
                    'projectid.min' => 'Please enter a valid ProjectID address.',
                    'password.required' => 'Password is required.',
                    'session.required' => 'session is required.',
                    'password.min' => 'Password must be at least 8 characters long.',
                ]);
            
                $grouplogin = allgroupslogin::find($request->input('id'));
            
                // Update the fields with new values from the validated inputs
                $grouplogin->projectid = $validatedData['projectid'];
                $grouplogin->password = $validatedData['password'];
                $grouplogin->session = $validatedData['session'];
                $grouplogin->save();
                 return back()->with('success', 'Group login Updated successfully.');
            }
            catch(\Exception $e)
            {
                return back()->with('error', 'Failed to Update group login.'. $e->getMessage());
            }
    }
    public function midmarks(Request $request){
        return view('PMO.Mid-Marks');
    }
    public function finelmarks(Request $request){
        return view('PMO.Finel-Marks');
    }
    public function addsuperviser(Request $request){
        try
        {
            $session=sessionmodel::all();
            return view('PMO.add-superviser',compact('session'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function addnewsuperviser(Request $request){
        try{
            $request->validate([
                'email' => 'required|email|unique:supervisers,email',
                'password' => 'required|min:8',
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                'Domain' => 'required',
                'pnumber' => 'required|numeric|min:11',
                'session' => 'required',
            ],[
                'email.required' => 'Email is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email is already registered.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',
                'name.required' => 'Name is required.',
                'name.string' => 'Name must be a valid string.',
                'name.regex' => 'Name must contain only alphabetic characters and spaces.',
                'Domain.required' => 'Domain is required.',
                'pnumber.required' => 'Phone number is required.',
                'pnumber.numeric' => 'Phone number must be numeric.',
                'pnumber.min' => 'Phone number must be at least 11 digits long.',
                'session.required' => 'Session is required.',
            ]);
            $addsuperviser= new superviser;
            $addsuperviser->name=$request->input('name');
            $addsuperviser->domain=$request->input('Domain');
            $addsuperviser->pnumber=$request->input('pnumber');
            $addsuperviser->email=$request->input('email');
            $addsuperviser->password=$request->input('password');
            $addsuperviser->pmo_id = Session::get('pmoid');
            if($addsuperviser->save())
            {
            $addsupervisersession= new supervisersession;
            $addsupervisersession->superviserid=$addsuperviser->id;
            $addsupervisersession->session=$request->input('session');
            if($addsupervisersession->save())
            {
                session()->flash('success','Supervisor Add Successfully!');
                return back();
                //  return back()->with('success','Supervisor Add Successfully!');
            }
            else {
                session()->flash('error','Supervisor Not Add');
                return back();
            }
            }
            else {
                return back()->with('error','Supervisor Not Add!');
            }
        }
        catch(Exception $e) {
            Log::error($e->getMessage());
            session()->flash('error','An error occurred. Please try again.');
            return back();
        }
    }
    public function allsuperviser(Request $request){
        try
        {
            $allsuperviser=superviser::all();
            $session=sessionmodel::all();
            $supervisersession=supervisersession::all();
            return view('PMO.all-superviser',compact('allsuperviser','session','supervisersession'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function allsessionofsuperviser($id){
        try
        {
            $superviser=supervisersession::where('superviserid',$id)->get();
            $session=sessionmodel::all();
            $supervisersession=supervisersession::all();
            return view('PMO.all-sessions-of-superviser',compact('superviser','session','supervisersession'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function enrollagainsuperviser($id,$year){
        try
        {
            $session=supervisersession::all();
            foreach($session as $item)
            {
                if($item->session==$year && $item->superviserid==$id)
                {
                    return back()->with('error','Already Add!');
                }
            }
            $addrecord=new supervisersession;
            $addrecord->superviserid=$id;
            $addrecord->session=$year;
            // $addrecord->pmo_id = Session::get('pmoid');
            $addrecord->save();
            return back();
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function deletesuperviser($id){
        try
        {
            // $deletesuperviser=superviser::find($id)->first();
            $superviser = superviser::find($id);
            if (!$superviser) {
                return back()->with('error', 'Supervisor not found');
            }
            supervisersession::where('superviserid', $id)->delete();
            // $deletesuperviser->delete();
            if($superviser->delete())
            {
                return back();
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function deletesuperviserfromsession($id){
        try
        {
            // $deletesuperviser=superviser::find($id)->first();
                $superviser = supervisersession::find($id);
                $allrecord = supervisersession::where('superviserid',$superviser->superviserid)->count();
                if (!$superviser) {
                    session()->flash('error','An error occurred. Please try again.');
                    return back();
                }
                if($allrecord > 1)
                {
                    $studentrecord = preliminaryproposal::where('superviserid',$superviser->superviserid)->get();
                    foreach($studentrecord as $item)
                    {
                        $grouprecord=studentgroups::where('id',$item->groupid)
                        ->where('session',$superviser->session)->first();
                        if($grouprecord)
                        {
                            if($grouprecord->studentsrecords)
                            {
                                $record=studentsrecords::find($grouprecord->studentsrecords->id);
                                $record->enrolledingroup=0;
                                $record->save();
                            }
                            if($grouprecord->studentsrecord1)
                            {
                                $record=studentsrecords::find($grouprecord->studentsrecord1->id);
                                $record->enrolledingroup=0;
                                $record->save();
                            }
                            if($grouprecord->studentsrecord2)
                            {
                                $record=studentsrecords::find($grouprecord->studentsrecord2->id);
                                $record->enrolledingroup=0;
                                $record->save();
                            }
                            $group=fileuploud::where('sharedby','student')
                            ->where('sharedbyid',$item->groupid)->delete();
                            $group=groupsubmiteditems::where('groupid',$item->groupid)->delete();
                            $group=projectdocumentation::where('groupid',$item->groupid)->delete();
                            $group=preliminaryproposal::where('groupid',$item->groupid)->delete();
                            $grouprecord->delete();
                        }
                    }
                    if($superviser->delete())
                    {
                        session()->flash('success','Supervisor deleted.');
                        return back();
                    }
                }
                else{
                        $studentrecord = preliminaryproposal::where('superviserid',$superviser->superviserid)->get();
                        foreach($studentrecord as $item)
                        {
                            $grouprecord=studentgroups::where('id',$item->groupid)
                            ->where('session',$superviser->session)->first();
                            if($grouprecord)
                            {
                                if($grouprecord->studentsrecords)
                                {
                                    $record=studentsrecords::find($grouprecord->studentsrecords->id);
                                    $record->enrolledingroup=0;
                                    $record->save();
                                }
                                if($grouprecord->studentsrecord1)
                                {
                                    $record=studentsrecords::find($grouprecord->studentsrecord1->id);
                                    $record->enrolledingroup=0;
                                    $record->save();
                                }
                                if($grouprecord->studentsrecord2)
                                {
                                    $record=studentsrecords::find($grouprecord->studentsrecord2->id);
                                    $record->enrolledingroup=0;
                                    $record->save();
                                }
                                $group=fileuploud::where('sharedby','student')
                                ->where('sharedbyid',$item->groupid)->delete();
                                $group=groupsubmiteditems::where('groupid',$item->groupid)->delete();
                                $group=projectdocumentation::where('groupid',$item->groupid)->delete();
                                $group=preliminaryproposal::where('groupid',$item->groupid)->delete();
                                $grouprecord->delete();
                            }
                        }
                        $supervisordelete = superviser::where('id',$superviser->superviserid)->delete();
                        $supervisorslotdelete = supervisormeetingstime::where('supervisorid',$superviser->superviserid)->delete();
                        if($superviser->delete())
                        {
                            session()->flash('success','Supervisor deleted.');
                            return redirect('PMO/all-superviser');
                        }
                }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function updatesuperviser($id){
        try
        {
            $record=superviser::find($id);
            $session=sessionmodel::all();
            // $supervisersession=supervisersession::where('superviserid',$id)->first();
            $supervisersession = supervisersession::where('superviserid', $id)
                ->orderBy('id', 'desc')
                ->first();
            // $supervisersession=supervisersession::all($id);
            // $deletesuperviser->delete();
            // $supervisersession->delete();
            return view('PMO.updatesuperviser',compact('record','session','supervisersession'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
  
    public function updatesavesuperviser(Request $request){
        try
        {
            $request->validate([
                'email' => [
                    'required',
                    'email',
                    Rule::unique('supervisers')->ignore($id),
                ],
                'password' => 'required|min:8',
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                'Domain' => 'required',
                'pnumber' => 'required|numeric|min:11',
                'session' => 'required',
            ],[
                'email.required' => 'Email is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email is already registered.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',
                'name.required' => 'Name is required.',
                'name.string' => 'Name must be a valid string.',
                'name.regex' => 'Name must contain only alphabetic characters and spaces.',
                'Domain.required' => 'Domain is required.',
                'pnumber.required' => 'Phone number is required.',
                'pnumber.numeric' => 'Phone number must be numeric.',
                'pnumber.min' => 'Phone number must be at least 11 digits long.',
                'session.required' => 'Session is required.',
            ]);
            $superviserrecord = superviser::find($request->input('id'));
            if (!$superviserrecord) {
                return back()->with('error', 'Supervisor not found');
            }
            $superviserrecord->name = $request->input('name');
            $superviserrecord->domain = $request->input('Domain');
            $superviserrecord->pnumber = $request->input('pnumber');
            $superviserrecord->email = $request->input('email');
            $superviserrecord->password = $request->input('password');
            if ($superviserrecord->save()) {
                $savesupervisersession = supervisersession::where('superviserid', $request->input('id'))->first();
                // if (!$savesupervisersession) {
                //     $savesupervisersession = new supervisersession();
                //     $savesupervisersession->superviserid = $superviserrecord->id;
                // }
                $savesupervisersession->session = $request->input('session');
                $savesupervisersession->save();
                return back()->with('success', 'Supervisor updated successfully');
            }
        
            return back()->with('error', 'Failed to update supervisor');

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function showsuperviseraccordingsession($session) {
        try
        {
            if(!empty($session)) {
                // Fetch all supervisors associated with the session
                $allsupervisers = supervisersession::where('session', $session)->get();
                
                // Array to store supervisor details
                $superviserDetails = [];
                // $supervisersession = supervisersession::all();
                $currentYear = date('Y');
    
                
                // Iterate through each supervisor associated with the session
                foreach ($allsupervisers as $superviser) {
                    // Find supervisor details by supervisor ID
                    $supervisorData = superviser::find($superviser->superviserid);
                    $superviserSession = supervisersession::where('superviserid', $supervisorData->id)->get();
    
                    // Check if the supervisor session contains the current year
                    foreach ($superviserSession as $item) {
                        if ($item->session == $currentYear) {
                            $currentYear = true;
                            break; // No need to check further once current year is found
                        }
                    }
                    // Check if supervisor data exists
    
                        // Add supervisor details to the array
                        $superviserDetails[] = [
                            'supervisor' => $supervisorData,
                            'session' => $superviser->session,
                            'curentyear' => $currentYear,
                            // Add more fields from $allsupervisers if needed
                        ];
                }
                // Return supervisor details as JSON response
                return response()->json($superviserDetails);
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function dactivatesuperviser($id){
        try
        {
            $supervisorData = superviser::find($id);
            $supervisorData->loginstatus = ($supervisorData->loginstatus == 0) ? 1 : 0;
            if($supervisorData->save())
            {
                return back();
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function sharefile(Request $request){
        try
        {
            $allfile = fileuploud::where('sharedby','pmo')->get();
            $allsupervisor=superviser::get();
            $allgroup=Studentgroups::get();
            $year=Carbon::now()->year;
            $allgrouparry=[];
            // return $allgroup->studentsrecords->session;
            foreach($allgroup as $item)
            {
            //  if($item->studentsrecords->session )
            //  {
                
            //  }
            //  if($item->studentsrecord1->session )
            //  {

            //  }
            //  if($item->studentsrecord2->session )
            //  {

            //  }
            if($item->studentsrecords->session == $year)
                {
                    $allgrouparry[]=$item;
                }
            }
            // return $allgrouparry;
            return view('PMO.share-file',compact('allfile','allgrouparry','allsupervisor'));

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function viewallfile(Request $request){
        try
        {
            $allfile = fileuploud::where('sharedwith', 'pmo')->get();
            return view('PMO.view-all-file',compact('allfile'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function deletefile($id){
        try
        {
            $file = fileuploud::find($id);
            if (!$file) {
                return back()->with('error', 'File not found.');
            }
            // Get the file path
            $filePath = storage_path('app/public/uploudimages/' . $file->filename);
            // Check if the file exists
            if (file_exists(storage_path('app/public/uploudimages/' . $file->filename))) {
                // Delete the file from the folder
                unlink($filePath);
            }
            if($file->delete())
            {
                return back()->with('success', "File Deleted!");
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function studentdocopen($id)
    {
        try
        {
            // $file = projectdocumentation::where($id);
            // return $file;
            // Get the file path from the storage
            if($id)
            {
                $filePath = storage_path('app/public/uploudimages/' . $id);
                // Check if the file exists
                // return $filePath;
                if (file_exists($filePath)) {
                    // downloud the file with own extenshion like .pdf and .txt
                    // $headers = array(
                    //     'Content-Type: application/pdf',
                    //   );
                    // return Response::download($filePath,'filename.pdf', $headers);
                    
                    // downloud the file
                    return Response::download($filePath);
                    
                    // return response()->file($filePath);
                } else {
                    // File not found
                    return back()->with('error', 'File not found.');
                }
            }
            else {
                // File not found
                return back()->with('error', 'File not found.');
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function openFile($id)
    {
        try
        {
            $file = fileuploud::find($id);
            // return $file;
            // Get the file path from the storage
            $filePath = storage_path('app/public/uploudimages/' . $file->filename);
            // Check if the file exists
            // return $filePath;
            if (file_exists($filePath)) {
                // downloud the file with own extenshion like .pdf and .txt
                // $headers = array(
                //     'Content-Type: application/pdf',
                //   );
                // return Response::download($filePath,'filename.pdf', $headers);
                
                // downloud the file
                return Response::download($filePath);
                
                // return response()->file($filePath);
            } else {
                // File not found
                return back()->with('error', 'File not found.');
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function fileuploudindividule(Request $request){
        try
        {
            // return $request->file('filename');
            // $request->validate([
            //     'filename' => 'required|file|mimes:pdf,doc,docx|max:2048',
            // ]);

            $fileuploud=new fileuploud;
            if($request->filled('fileforgroup') || $request->filled('fileforsupervisor'))
            {
                $filename = $request->file('filename')->getClientOriginalName();
                $findfile = fileuploud::where('filename', $filename)->first();
        
                if ($findfile) {
                    $extension = $request->file('filename')->getClientOriginalExtension();
                    $newFilename = pathinfo($filename, PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
                } else {
                    $newFilename = $filename;
                }
                $request->file('filename')->storeAs('uploudimages',$newFilename ,'public');
                // Storage::disk('public')->put('uploads', $file, $originalName);
                $fileuploud->sharedby='pmo';
                $fileuploud->sharedbyid = Session::get('pmoid');
                $fileuploud->filename = $newFilename;

                if($request->filled('fileforsupervisor'))
                {
                    $fileuploud->sharedwith='supervisor';
                    $fileuploud->sharedwithid = $request->fileforsupervisor;
                }
                elseif($request->filled('fileforgroup'))
                {
                    $fileuploud->sharedwith='student';
                    $fileuploud->sharedwithid = $request->fileforgroup;
                }
                if($fileuploud->save())
                {
                    return back()->with('success', "File Shared!");
                }
            }
            else
            {
                return back()->with('error','Please Select one Must!');
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function fileuploud(Request $request){
        try
        {
            // $request->validate([
            //     'file' => 'file|mimes:pdf,doc,docx|max:2048',
            // ], [
            //     'file.mimes' => 'The file must be a PDF document.',
            //     'file.max'=>'File size must b less then 2048',
            // ]);
            // return $request;

            $fileuploud=new fileuploud;
            if($request->has('supervisor') || $request->has('student'))
            {
                $filename = $request->file('file')->getClientOriginalName();
                $findfile = fileuploud::where('filename', $filename)->first();
        
                if ($findfile) {
                    $extension = $request->file('file')->getClientOriginalExtension();
                    $newFilename = pathinfo($filename, PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
                } else {
                    $newFilename = $filename;
                }
                $request->file('file')->storeAs('uploudimages',$newFilename ,'public');
                // Storage::disk('public')->put('uploads', $file, $originalName);
                $fileuploud->sharedby='pmo';
                $fileuploud->sharedbyid = Session::get('pmoid');
                $fileuploud->filename = $newFilename;

                if ($request->has('supervisor') && $request->has('student')) {
                    $fileuploud->sharedwith = 'both';
                    // You might need to set a proper ID for shared with both (e.g., 'both_id')
                    $fileuploud->sharedwithid = 'both';
                } elseif ($request->has('supervisor')) {
                    $fileuploud->sharedwith = 'supervisor';
                    // Set a proper ID for shared with supervisor
                    $fileuploud->sharedwithid = 'supervisor';
                } elseif ($request->has('student')) {
                    $fileuploud->sharedwith = 'student';
                    // Set a proper ID for shared with student
                    $fileuploud->sharedwithid = 'student';
                }
                if($fileuploud->save())
                {
                    return back()->with('success', "File Shared!");
                }
            }
            else
            {
                return back()->with('error','Please Select one Must!');
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function createsession(Request $request){
        try
        {
            $readsession=sessionmodel::all();
            return view('PMO.create-session',compact('readsession'));

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function deletesession($id){
        try
        {
            $readsession = sessionmodel::find($id);
            if (!$readsession) {
                return back()->with('error', 'Session not found');
            }
            $readsession->delete();
            return back()->with('success', 'Session deleted successfully');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function addsession(Request $request){
        try
        {
            $addsession=new sessionmodel;
            $addsession->Year=$request->input('year');
            $addsession->save();
            return back();
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function addpmo(Request $request){
        try
        {
            $readsession=sessionmodel::all();
            if(!empty($readsession))
            {
                return view('PMO.add-pmo',compact('readsession'));
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
       
    }
    public function addnewpmo(Request $request){
        try
        {
            $request->validate([
                'email' => 'required|email|unique:supervisers,email',
                'password' => 'required|min:8',
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                'pnumber' => 'required|numeric|min:11',
                'session' => 'required',
            ],[
                'email.required' => 'Email is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email is already registered.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',
                'name.required' => 'Name is required.',
                'name.string' => 'Name must be a valid string.',
                'name.regex' => 'Name must contain only alphabetic characters and spaces.',
                'pnumber.required' => 'Phone number is required.',
                'pnumber.numeric' => 'Phone number must be numeric.',
                'pnumber.min' => 'Phone number must be at least 11 digits long.',
                'session.required' => 'Session is required.',
            ]);
            $addnewpmo=new pmo;
            $addnewpmo->name=$request->input("name");
            $addnewpmo->pnumber=$request->input("pnumber");
            $addnewpmo->email=$request->input("email");
            $addnewpmo->password=$request->input("password");
            $addnewpmo->session=$request->input("session");
            $addnewpmo->save();
            return back()->with('success', 'PMO Add successfully');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function allpmo(Request $request){
        try
        {
            $allpmo = pmo::where('id', '!=',Session::get('pmoid'))->get();
            $readsession=sessionmodel::all();
             if(!empty($allpmo) && !empty($readsession))
            {
               return view('PMO.all-pmo',compact("allpmo",'readsession'));
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function showpmoaccordingsession($session){
      if(!empty($session))
        {
            $allpmo=pmo::where('session', $session)->get();
            return response()->json($allpmo);
        }
       
    }
    public function updatepmo($id){
        if(!empty($id)) {
            $pmo = pmo::find($id);
    
            if (!$pmo) {
                return back()->with('error', 'PMO not found');
            }
    
            $session = sessionmodel::all();
            return view('PMO.update-pmo', compact('pmo', 'session'));
        } else {
            return back()->with('error', 'Invalid ID');
        }
    }
    public function updateprofile(){
        try
        {
            $id = Session::get('pmoid');
            if(!empty($id)) {
                $pmo = pmo::find($id);
        
                if (!$pmo) {
                    return back()->with('error', 'PMO not found');
                }
        
                $session = sessionmodel::all();
                return view('PMO.update-pmo', compact('pmo', 'session'));
            } else {
                return back()->with('error', 'Invalid ID');
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function updatepmosave(Request $request){
        try
        {
            $id=$request->id;
            $request->validate([
                'email' => [
                    'required',
                    'email',
                    Rule::unique('pmos')->ignore($id),
                ],
                'password' => 'required|min:8',
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                'pnumber' => 'required|numeric|min:11',
                'session' => 'required',
            ],[
                'email.required' => 'Email is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email is already registered.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',
                'name.required' => 'Name is required.',
                'name.string' => 'Name must be a valid string.',
                'name.regex' => 'Name must contain only alphabetic characters and spaces.',
                'pnumber.required' => 'Phone number is required.',
                'pnumber.numeric' => 'Phone number must be numeric.',
                'pnumber.min' => 'Phone number must be at least 11 digits long.',
                'session.required' => 'Session is required.',
            ]);
            if(!empty($id)) {
                $pmo = pmo::find($id);
                if (!$pmo) {
                    return back()->with('error', 'PMO not found');
                }
                $pmo->name = $request->name;
                $pmo->pnumber = $request->pnumber;
                $pmo->email = $request->email;
                $pmo->password = $request->password;
                $pmo->session = $request->session;
                $pmo->save();
                return back()->with('success', 'PMO updated successfully');
            }
            // $validatedData = $request->validate([
            //     'name' => 'required|string',
            //     'pnumber' => 'required|string',
            //     'email' => 'required|email',
            //     'password' => 'required|string',
            //     'session' => 'required|string',
            // ]);
        
            // Update the PMO record with validated data
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
        
    }
    public function deletepmo($id) {
        try
        {
            if (!empty($id)) {
                $pmo = pmo::find($id);
                $files=fileuploud::where('sharedby','pmo')
                ->where('sharedbyid',$pmo->id)->get();
                foreach($files as $item)
                {
                    // Get the file path
                   $filePath = storage_path('app/public/uploudimages/' . $item->filename);
                   // Check if the file exists
                   if (file_exists(storage_path('app/public/uploudimages/' . $item->filename))) {
                       // Delete the file from the folder
                       unlink($filePath);
                   }
                   $files->delete();
                }
                if (!$pmo) {
                    return back()->with('error', 'PMO not found');
                }
                if ($pmo->delete()) {
                    return back()->with('success', 'PMO deleted successfully');
                } else {
                    return back()->with('error', 'Failed to delete PMO');
                }
            } else {
                return back()->with('error', 'Invalid ID');
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function dactivatepmo($id){
        try
        {
            if (!empty($id)) {
                $pmo = pmo::find($id);
        
                if (!$pmo) {
                    return back()->with('error', 'PMO not found');
                }
        
                // Toggle the login status
                $pmo->loginstatus = ($pmo->loginstatus == 0) ? 1 : 0;
        
                if ($pmo->save()) {
                    $status = $pmo->loginstatus ? 'activated' : 'deactivated';
                    return back()->with('success', "PMO login status has been $status");
                } else {
                    return back()->with('error', 'Failed to update PMO login status');
                }
            } else {
                return back()->with('error', 'Invalid ID');
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function dactivategrouplogin($id){
        try
        {
            if (!empty($id)) {
                $grouplogin = allgroupslogin::find($id);
                if (!$grouplogin) {
                    return back()->with('error', 'PMO not found');
                }
                // Toggle the login status
                $grouplogin->loginstatus = ($grouplogin->loginstatus == 0) ? 1 : 0;
        
                if ($grouplogin->save()) {
                    $status = $grouplogin->loginstatus ? 'activated' : 'deactivated';
                    return back()->with('success', "PMO login status has been $status");
                } else {
                    return back()->with('error', 'Failed to update PMO login status');
                }
            } else {
                return back()->with('error', 'Invalid ID');
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function addnews(Request $request){
        try
        {
            // Log::info('News For: ' . $request->input('newsfor'));
            // return response()->json(['message' => $request->input('news')]);
            $request->validate([
                'news' => 'required',
            ],[
                'news.required' => 'News is required!',
            ]);
            if($request->filled('news'))
            {
                $news = new news();
                $news->news = $request->input('news');
                $news->sharedby = 1;
                $news->pmo_id = Session::get('pmoid');
                $news->sharedfor = $request->input('newsfor');
                if($request->input('newsfor')=='superviser')
                {
                    $allsupervisors = superviser::all();
                    foreach ($allsupervisors as $supervisor) {
                        $supervisor->totalviewnews = 1;
                        $supervisor->save();
                    }
                }
                elseif($request->input('newsfor')=='student')
                {
                    $allgroups = Studentgroups::all();
                    foreach ($allgroups as $groups) {
                        $groups->totalviewnews = 1;
                        $groups->save();
                    }
                }
                elseif($request->input('newsfor')=='both')
                {
                    $allsupervisors = superviser::all();
                    foreach ($allsupervisors as $supervisor) {
                        $supervisor->totalviewnews = 1;
                        $supervisor->save();
                    }
                    $allgroups = Studentgroups::all();
                    foreach ($allgroups as $groups) {
                        $groups->totalviewnews = 1;
                        $groups->save();
                    }
                }
                else
                {
                    return response()->json(['message' => 'News is Required.']);
                }
                if($news->save())
                {
                    return response()->json(['message' => 'Data saved successfully']);
                }

            }
            // return back();
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function readnews(Request $request){
        try
        {
            $news =news::all();
            if(!empty($news))
            {
                // return response()->json($news);
                return response()->json($news);
            }
        // return back();
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
            
    }
    public function deletenews(Request $request){
        try
        {
            $id=$request->input('id');
            $news =news::find($id);
            if($news->delete())
            {
               return back();
            }
    
           //  return response()->json($id);
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    // public function downloadallPdf(){
    //     $grouprecords = Studentgroups::all();

    //     foreach ($grouprecords as $grouprecord) {
    //         // Generate PDF for each record
    //         $pdf = PDF::loadView('forms.mid-form-for-students', compact('grouprecord'));

    //         // Define the filename
    //         $fileName = 'Mid-Eva-Form-' . $grouprecord->id . '.pdf';

    //         // Save PDF to storage
    //         $pdf->save(storage_path('app/public/' . $fileName));

    //         // Download the PDF
    //         // return response()->download(storage_path('app/public/' . $fileName));
    //     }
    //     $pdfDirectory = storage_path('app/public/');
    //     $pdfFiles = glob($pdfDirectory . '*.pdf');
    
    //     if (empty($pdfFiles)) {
    //         return back()->with('error', 'No PDF files found.');
    //     }
    
    //     $zipFileName = 'all-pdfs.zip';
    //     $zipFilePath = $pdfDirectory . $zipFileName;
    
    //     // Create a new zip archive
    //     $zip = new ZipArchive;
    //     if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
    //         return back()->with('error', 'Failed to create ZIP archive.');
    //     }
    
    //     // Add each PDF file to the zip archive
    //     foreach ($pdfFiles as $pdfFile) {
    //         $relativePath = str_replace($pdfDirectory, '', $pdfFile);
    //         $zip->addFile($pdfFile, $relativePath);
    //     }
    
    //     $zip->close();
    
    //     // Send the zip file as a response
    //     return response()->download($zipFilePath)->deleteFileAfterSend(true);
    // }
    public function midEvaform($id){
        try
        {
            $grouprecord=Studentgroups::find($id);
            // optional($grouprecord->preliminaryProposal->name);
            // dd($grouprecord->studentsrecord1->regno);
            // $currentDate = Carbon::now()->format('d-m-Y');
            // $currentTime = Carbon::now()->format('g:i A');
            // $currentDateTime = Carbon::now('Asia/Karachi');
            // $currentDateTime->format('h:i A');
            // $mytime = Carbon::now();
            //  $mytime->toDateTimeString();
            // dd($currentDateTime);
            // $timestamp = "2023-12-11T04:07:36.616963Z";

            // Create a Carbon instance from the provided timestamp in UTC
            // $utcTime = Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $timestamp)->setTimezone('Asia/Karachi');

            // Format the time in 12-hour format (hour:minute AM/PM) for Pakistan's time zone
            // $currentTime = $utcTime->format('h:i A');
            // return $mytime;
            // $pdf = Pdf::loadView('forms.defance-form-for-panel');
            // $pdf = Pdf::loadView('forms.final-form-for-students');
            // $pdf = Pdf::loadView('forms.meeting-form');
            $pdf = Pdf::loadView('forms.mid-form-for-students',compact('grouprecord'));
            return $pdf->download('Mid-Eva-Form.pdf');

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function meetingform($id){
        try
        {
            $grouprecord=Studentgroups::find($id);
            // optional($grouprecord->preliminaryProposal->name);
            // dd($grouprecord->studentsrecord1->regno);
            $currentDate = Carbon::now()->format('d-m-Y');
            // $currentTime = Carbon::now()->format('g:i A');
            // $currentDateTime = Carbon::now('Asia/Karachi');
            // $currentDateTime->format('h:i A');
            // $mytime = Carbon::now();
            //  $mytime->toDateTimeString();
            // dd($currentDateTime);
            $timestamp = "2023-12-11T04:07:36.616963Z";

            // Create a Carbon instance from the provided timestamp in UTC
            $utcTime = Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $timestamp)->setTimezone('Asia/Karachi');

            // Format the time in 12-hour format (hour:minute AM/PM) for Pakistan's time zone
            $currentTime = $utcTime->format('h:i A');
            // return $mytime;
            // $pdf = Pdf::loadView('forms.defance-form-for-panel');
            // $pdf = Pdf::loadView('forms.final-form-for-students');
            $pdf = Pdf::loadView('forms.meeting-form',compact('grouprecord'));
            // $pdf = Pdf::loadView('forms.mid-form-for-students');
            return $pdf->download('Meeting-Form.pdf');

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
        
    }
    public function defanceform($id){
        try
        {
            $grouprecord=Studentgroups::find($id);
            // optional($grouprecord->preliminaryProposal->name);
            // dd($grouprecord->studentsrecord1->regno);
            // $currentDate = Carbon::now()->format('d-m-Y');
            // $currentTime = Carbon::now()->format('g:i A');
            // $currentDateTime = Carbon::now('Asia/Karachi');
            // $currentDateTime->format('h:i A');
            // $mytime = Carbon::now();
            //  $mytime->toDateTimeString();
            // dd($currentDateTime);
            // $timestamp = "2023-12-11T04:07:36.616963Z";
    
            // Create a Carbon instance from the provided timestamp in UTC
            // $utcTime = Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $timestamp)->setTimezone('Asia/Karachi');
    
            // Format the time in 12-hour format (hour:minute AM/PM) for Pakistan's time zone
            // $currentTime = $utcTime->format('h:i A');
            // return $mytime;
            // $pdf = Pdf::loadView('forms.defance-form-for-panel',compact('grouprecord'));
            $pdf = Pdf::loadView('forms.defance-form-for-panel',compact('grouprecord'));
            // $pdf = Pdf::loadView('forms.final-form-for-students');
            // $pdf = Pdf::loadView('forms.meeting-form');
            // $pdf = Pdf::loadView('forms.mid-form-for-students');
            return $pdf->download('Preliminary-Form.pdf');

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function finalform($id){
        try
        {
            $grouprecord=Studentgroups::find($id);
            // optional($grouprecord->preliminaryProposal->name);
            // dd($grouprecord->studentsrecord1->regno);
            $currentDate = Carbon::now()->format('d-m-Y');
            // $currentTime = Carbon::now()->format('g:i A');
            // $currentDateTime = Carbon::now('Asia/Karachi');
            // $currentDateTime->format('h:i A');
            // $mytime = Carbon::now();
            //  $mytime->toDateTimeString();
            // dd($currentDateTime);
            $timestamp = "2023-12-11T04:07:36.616963Z";

            // Create a Carbon instance from the provided timestamp in UTC
            $utcTime = Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $timestamp)->setTimezone('Asia/Karachi');

            // Format the time in 12-hour format (hour:minute AM/PM) for Pakistan's time zone
            $currentTime = $utcTime->format('h:i A');
            // $data = [
            //     'grouprecord' => $grouprecord,
            //     'currentDate' => $currentDate, // Current date in YYYY-MM-DD format
            //     'currentTime' => $currentTime, // Current time in HH:MM:SS format
            // ];
            
            // // Encode the $data array to JSON format
            // $jsonData = json_encode($data);
            
            // // Return the JSON data
            // return $jsonData;
            // return $mytime;
            $pdf = Pdf::loadView('forms.final-form-for-students',compact('grouprecord','currentDate','currentTime'));
            return $pdf->download('Final_Evaluation_Form.pdf');
            //  return response()->json($id);

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
}
