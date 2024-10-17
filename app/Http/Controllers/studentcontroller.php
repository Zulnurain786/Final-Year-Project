<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//session
use Illuminate\Support\Facades\Session;

//models
use App\Models\news;
use App\Models\studentsrecords;
use App\Models\studentgroups;
use App\Models\superviser;
use App\Models\supervisersession;
use App\Models\preliminaryproposal;
use App\Models\fileuploud;
use App\Models\allgroupslogin;
use App\Models\supervisormeetingstime;
use App\Models\projectdocumentation;
use App\Models\projectweightage;


//date
use Carbon\Carbon;
//response return
use Illuminate\Support\Facades\Response;


class studentcontroller extends Controller
{
    public function logout(Request $request){
        try
        { 
            Session::flush();
            return redirect('/student-login');
            // return view('Student.login');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function profile(Request $request){
        try
        { 
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            return view('Student.view-student-login',compact('loginrecord'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        // return view('Student.login');
    }
    public function updategrouplogin(Request $request){
        try
        { 
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $loginrecord->projectid=$loginrecord->projectid;
            $loginrecord->password=$request->password;
            if($loginrecord->save())
            {
                session()->flash('success','Profile Updated Successfully!');
                return back();
            }
            else{
                session()->flash('error','Profile Not Updated.');
                return back();
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function addprogress(Request $request){
        try
        { 
            $id=Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $grouprecord = studentgroups::where('loginid',$loginrecord->id)->first();
            $projectweightage = projectweightage::where('purposelid',$grouprecord->PreliminaryProposal->id)->first();
            if($projectweightage)
            {
                $data=json_decode($projectweightage->keyNvalue, true);
                return view('Student.add-progress',compact('data'));
            }
            return redirect('Student/home')->with('error', 'Supervisor Not Assighn Weightage to Your Project');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function index(Request $request){
        try
        { 
            $id = Session::get('projectid');
            $status='NotSubmited';
            $supervisor="NotSelected";
            $count = 0;
            $currentYear = Carbon::now()->year;
            $allsupervisers = supervisersession::where('session', $currentYear)->get();
            // return $allsupervisers->superviser->name;
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $grouprecord=studentgroups::where('loginid',$loginrecord->id)->first();
            $allfiles=0;
            if($grouprecord)
            {
                $allfiles = fileuploud::where('sharedby', 'student')
                ->where('sharedbyid',$grouprecord->id)
                ->count();
            }
            
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            if($loginrecord)
            {
                $grouprecord = studentgroups::where('loginid', $loginrecord->id)->first();
                
            }
            if($grouprecord)
            {
                $grouprecord->studentsrecords ? $count++ : '';
                $grouprecord->studentsrecord1 ? $count++ : '';
                $grouprecord->studentsrecord2 ? $count++ : '';
                $purposelsubmited = preliminaryproposal::where('groupid',$grouprecord->id)->first();
                if($purposelsubmited)
                {
                    $purposelstatus = preliminaryproposal::where('groupid', $grouprecord->id)
                    ->orderBy('id', 'desc') // or 'created_at' if you have a timestamp field
                    ->first();
                $supervisor=$grouprecord->PreliminaryProposal->supervisor->name;
                }
                if($purposelstatus)
                {
                    $status = $purposelstatus->purposelstatus;
                }
            }
            return view('Student.home',compact('status','count','supervisor','allsupervisers','allfiles'));

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    //// student group function----------------------------------------
    public function selectgroupmember(Request $request){
        try
        {
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $currentYear = Carbon::now()->year;
            $allstudent=studentsrecords::where('session',$currentYear)
            ->where('enrolledingroup', 0)
            ->get();
            $grouprecord=studentgroups::where('loginid',$loginrecord->id)->first();
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
            // dd($studentregnos );
            return view('Student.Select-group-member',compact('allstudent','studentregnos'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
      
    }
    public function creategroup(Request $request){
       
        try{
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $grouprecord=studentgroups::where('loginid',$loginrecord->id)->first();;
            if($grouprecord)
            {
                return back()->with('error', 'Group already Created.');
            }
            else
            {
                $selectedStudentIds = $request->input('states');
                $currentYear = Carbon::now()->year;
                $addstudentgroup = new studentgroups;
                $members = count($selectedStudentIds);
                if(isset($selectedStudentIds[0])) {
                    $addstudentgroup->m1regno = $selectedStudentIds[0];
                }
                if(isset($selectedStudentIds[1])) {
                    $addstudentgroup->m2regno = $selectedStudentIds[1];
                }
                if(isset($selectedStudentIds[2])) {
                    $addstudentgroup->m3regno = $selectedStudentIds[2];
                }
                $addstudentgroup->groupmembers=$members;
                $addstudentgroup->session=$currentYear;
                $addstudentgroup->loginid=$loginrecord->id;
                if($addstudentgroup->save())
                {
                    foreach ($selectedStudentIds as $studentId) {
                        $studentRecord = studentsrecords::where('regno', $studentId)->first();
                        $studentRecord->enrolledingroup = 1;
                        $studentRecord->save();
                    }
                    return back()->with('success', 'Group Created.');
                }
                else
                {
                    return back()->with('error', 'Group  Not Created.');
                }
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
        // return view('Student.Preliminary-Purposel');
    }
    //// student group function end----------------------------------------
    public function preliminarypurposel(Request $request){
        try
        {
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
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

            $grouprecord=studentgroups::where('loginid',$loginrecord->id)->first();
            // return $grouprecord;
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
                return view('Student.Preliminary-Purposel',compact('allsuperviser','studentregnos','grouprecord'));
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
    }
    public function addpreliminarypurposel(Request $request){
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
            $addpurposel=new preliminaryproposal;
            $addpurposel->groupid=$request->input('id');
            $addpurposel->superviserid=$request->input('superviser');
            $addpurposel->projectname=$request->input('projectname');
            $addpurposel->electivecourses=$request->input('electivecourses');
            $addpurposel->programminglanguagetools=$request->input('plt');
            $purposelrecord = preliminaryproposal::where('groupid',$request->input('id'))
            ->whereIn('purposelstatus', ['accept', 'NotApproved'])
            ->first();
            // return $purposelrecord;

            if(!$purposelrecord)
            {
                if($addpurposel->save())
                {
                    return redirect()->route('Student.projectstatus')->with('success', 'Preliminary Proposal Form is Submitted.');
                }
                else
                {
                    return back()->with('error', 'Preliminary Proposal Form Not Submited.');
                }
            }
            else
            {
                return redirect()->route('Student.projectstatus')->with('error', 'Preliminary Proposal Form already Submitted.');
            }  
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function sharefile(Request $request){
        try
        { 
            
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $grouprecord = studentgroups::where('loginid',$loginrecord->id)->first();
            $purposel = preliminaryproposal::where('groupid',$grouprecord->id)->first();
            $finddoc = projectdocumentation::where('groupid',$grouprecord->id)->first();
            $findfile = fileuploud::where('sharedby', 'student')
            ->where('sharedbyid',$grouprecord->id)
            ->get();
            return view('Student.share-file',compact('findfile','finddoc'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function deletedoc($id){
        try{
            $value=$id;
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $grouprecord = studentgroups::where('loginid',$loginrecord->id)->first();
            $doc = projectdocumentation::where('documentation',$value)
            ->where('groupid',$grouprecord->id)
            ->first();
            $abstract = projectdocumentation::where('purposelabstract',$value)
            ->where('groupid',$grouprecord->id)
            ->first();
            if (!$doc && !$abstract) {
                return back()->with('error', 'File not found.');
            }
            if($doc)
            {
                // Get the file path
                $filePath = storage_path('app/public/uploudimages/' . $value);
                // Check if the file exists
                if (file_exists(storage_path('app/public/uploudimages/' . $value))) {
                    // Delete the file from the folder
                    unlink($filePath);
                    $doc->documentation=null;

                }
                if($doc->save())
                {
                    return back()->with('success', "File Deleted!");
                }
            }
            elseif($abstract)
            {
                // Get the file path
                $filePath = storage_path('app/public/uploudimages/' . $value);
                // Check if the file exists
                if (file_exists(storage_path('app/public/uploudimages/' . $value))) {
                    // Delete the file from the folder
                    unlink($filePath);
                    $abstract->purposelabstract=null;
                }
                if($abstract->save())
                {
                    return back()->with('success', "File Deleted!");
                }
            }
            else{
                return back()->with('error', "File Not Deleted!");
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
        
    }
    public function opendoc($id)
    {
        try
        { 
            $value=$id;
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $grouprecord = studentgroups::where('loginid',$loginrecord->id)->first();
            $doc = projectdocumentation::where('documentation',$value)
                ->where('groupid',$grouprecord->id)
                ->first();
            $abstract = projectdocumentation::where('purposelabstract',$value)
                ->where('groupid',$grouprecord->id)
                ->first();
                if (!$doc && !$abstract) {
                    return back()->with('error', 'File not found.');
                }
                if($doc)
                {
                    $filePath = storage_path('app/public/uploudimages/' . $value);
                    if (file_exists($filePath)) {
                        return Response::download($filePath);
                    }
                }
                elseif($abstract)
                {
                    $filePath = storage_path('app/public/uploudimages/' . $value);
                    if (file_exists($filePath)) {
                        return Response::download($filePath);
                    }
                }
                else{
                    return back()->with('error', "File Not Found!");
                }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function uplouddocumentation(Request $request){
        try{
            $request->validate([
                'file' => 'required|mimes:doc,docx',
            ], [
                'file.required' => 'File is required.',
                'file.mimes' => 'The file must be a DOC file.',
            ]);
            if($request->hasFile('file') && $request->filled('select'))
            {
                $id = Session::get('projectid');
                $loginrecord = allgroupslogin::where('projectid', $id)->first();
                $grouprecord = studentgroups::where('loginid',$loginrecord->id)->first();
                $purposel = preliminaryproposal::where('groupid',$grouprecord->id)->first();
                $finddoc=projectdocumentation::where('groupid',$grouprecord->id)->first();
                if($finddoc)
                {
                    $finddoc->groupid=$grouprecord->id; 
                    if($request->input('select') !='purposelabstract')
                    {
                        if($finddoc->documentation)
                        {
                            return back()->with('error','Documentation is Already Uplouded!');
                        }
                        $extension = $request->file('file')->getClientOriginalExtension();
                        $newFilename = pathinfo('documentation_'. $loginrecord->projectid, PATHINFO_FILENAME) . '.' . $extension;
                        $request->file('file')->storeAs('uploudimages',$newFilename ,'public');
                        $finddoc->documentation=$newFilename;
                    }
                    else
                    {
                        if($finddoc->purposelabstract)
                        {
                            return back()->with('error','Abstarct is Already Uplouded!');
                        }
                        $extension = $request->file('file')->getClientOriginalExtension();
                        $newFilename = pathinfo('abstract_'. $loginrecord->projectid, PATHINFO_FILENAME) . '.' . $extension;
                        $request->file('file')->storeAs('uploudimages',$newFilename ,'public');
                        $finddoc->purposelabstract=$newFilename;
                    }
                    if($finddoc->save())
                    {
                        return back()->with('success','File Uplouded Successfully!');
                    }
                    else{
                        return back()->with('error','File Not Uplouded!');
                    }
                }
                else
                {
                    $fileuploud=new projectdocumentation;
                    $fileuploud->groupid=$grouprecord->id; 
                    if($request->input('select') !='purposelabstract')
                    {
                        $extension = $request->file('file')->getClientOriginalExtension();
                        $newFilename = pathinfo('documentation_'. $loginrecord->projectid, PATHINFO_FILENAME) . '.' . $extension;
                        $request->file('file')->storeAs('uploudimages',$newFilename ,'public');
                        $fileuploud->documentation=$newFilename;
                    }
                    else
                    {
                        $extension = $request->file('file')->getClientOriginalExtension();
                        $newFilename = pathinfo('abstract_'. $loginrecord->projectid, PATHINFO_FILENAME) . '.' . $extension;
                        $request->file('file')->storeAs('uploudimages',$newFilename ,'public');
                        $fileuploud->purposelabstract=$newFilename;
                    }
                    if($fileuploud->save())
                    {
                        return back()->with('success','File Uplouded Successfully!');
                    }
                    else{
                        return back()->with('error','File Not Uplouded!');
                    }
                } 
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }           
    }
    public function uploudfile(Request $request){
        try
        { 
            if($request->hasFile('file') && $request->filled('select'))
            {
                $id = Session::get('projectid');
                $loginrecord = allgroupslogin::where('projectid', $id)->first();
                $grouprecord = studentgroups::where('loginid',$loginrecord->id)->first();
                $purposel = preliminaryproposal::where('groupid',$grouprecord->id)->first();
                $fileuploud=new fileuploud;
                $fileuploud->sharedby="student"; 
                $fileuploud->sharedbyid=$grouprecord->id; 
                $fileuploud->sharedwith=$request->input('select'); 
                if($request->input('select') !='pmo')
                {
                $fileuploud->sharedwithid=$purposel->superviserid;
                }
                else
                {
                    $fileuploud->sharedwithid='pmo';
                }
                $filename = $request->file('file')->getClientOriginalName();
                $findfile = fileuploud::where('filename', $filename)->first();
        
                if ($findfile) {
                    $extension = $request->file('file')->getClientOriginalExtension();
                    $newFilename = pathinfo($filename, PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
                } else {
                    $newFilename = $filename;
                }
                $request->file('file')->storeAs('uploudimages',$newFilename ,'public');
                $fileuploud->filename=$newFilename;
                if($fileuploud->save())
                {
                    return back()->with('success','File Uplouded Successfully!');
                }
                else
                {
                    return back()->with('error','File Not Uplouded!');
                }
            }
            return view('Student.share-file');

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function viewfile(Request $request){
        try
        { 
            // $id = Session::get('projectid');
            // $loginrecord = allgroupslogin::where('projectid', $id)->first();
            // $grouprecord = studentgroups::where('loginid',$loginrecord->id)->first();
            // $purposel = preliminaryproposal::where('groupid',$grouprecord->id)->first();
            // $allfiles = fileuploud::where('sharedbyid', $purposel->superviserid)
            // ->where('sharedwith', 'student')
            // ->orWhere('sharedby', 'pmo')
            // ->get();
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $grouprecord = studentgroups::where('loginid',$loginrecord->id)->first();
            $purposel = preliminaryproposal::where('groupid',$grouprecord->id)->first();
            $allfiles = fileuploud::where('sharedwith', 'student')
            ->where('sharedwithid',$grouprecord->id)
            ->orwhere('sharedwithid','student')
            ->get();
            // return view('Student.share-file',compact('findfile'));
            return view('Student.view-file',compact('allfiles'));

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function meetingslote(Request $request){
        try
        { 
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $grouprecord = studentgroups::where('loginid',$loginrecord->id)->first();
            $purposel = preliminaryproposal::where('groupid',$grouprecord->id)->where('purposelstatus','approved')->first();
            $purposel ? $allmeetings=supervisormeetingstime::where('supervisorid',$purposel->superviserid)->get() : $allmeetings=null;
            return view('Student.meeting-slote',compact('allmeetings'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function viewmarks(Request $request){
        try
        { 
            return view('Student.view-marks');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function projectstatus(Request $request){
        try
        { 
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $grouprecord = studentgroups::where('loginid', $loginrecord->id)->first();
            $purposel = preliminaryproposal::where('groupid',$grouprecord->id)->get();
            // return $purposel;
            return view('Student.Project-status',compact('purposel'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function readnews(Request $request){
        try
        { 
            $news = news::whereIn('sharedfor', ['student', 'both'])->get();
            if(!empty($news))
            {
              return response()->json($news);
            }
         }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function NewNews(Request $request){
        try
        { 
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $news = studentgroups::where('loginid', $loginrecord->id)->first();
            return response()->json($news);
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }

    }
    public function allnewsreaded(Request $request){
        try
        { 
            $id = Session::get('projectid');
            $loginrecord = allgroupslogin::where('projectid', $id)->first();
            $news = studentgroups::where('loginid', $loginrecord->id)->first();
            $news->totalviewnews=0;
            if($news->save())
            {
                return response()->json(['message' => 'Operation successful']);
            }
            else
            {
                return response()->json(['message' => 'Operation fail']);
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
}
