<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//session
use Illuminate\Support\Facades\Session;
//models
use App\Models\news;
use App\Models\superviser;
use App\Models\fileuploud;
use App\Models\studentgroups;
use App\Models\preliminaryproposal;
use App\Models\supervisormeetingstime;
use App\Models\studentsrecords;
use App\Models\projectweightage;
use App\Models\sessionmodel;

//date
use Carbon\Carbon;
use Illuminate\Validation\Rule;


class supervisercontroller extends Controller
{
    public function logout(Request $request){
        try
        { 
            Session::flush();
            return redirect('/supervisor-login');
            // return view('Superviser.login');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function profile(Request $request){
        try
        { 
            $supervisor=superviser::find(Session::get('supervisorid'));
            return view('Superviser.superviser-profile',compact('supervisor'));
            // return view('Superviser.login');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function updateprofile(Request $request){
        try{
            $supervisorId = Session::get('supervisorid');
            $request->validate([
                'email' => [
                    'required',
                    'email',
                    Rule::unique('supervisers')->ignore($supervisorId),
                ],
                'password' => 'required|min:8',
                'Domain' => 'required',
                'pnumber' => 'required|numeric|min:10',
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            ],[
                'email.required' => 'Email is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email is already registered.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',
                'Domain.required' => 'Domain is required.',
                'name.string' => 'Name must be a valid string.',
                'name.regex' => 'Name must contain only alphabetic characters and spaces.',
                'pnumber.required' => 'Phone number is required.',
                'pnumber.numeric' => 'Phone number must be numeric.',
                'pnumber.min' => 'Phone number must be at least 11 digits long.',
            ]);
            $supervisor = superviser::find($supervisorId);
            $supervisor->name=$request->input('name');
            $supervisor->domain=$request->input('Domain');
            $supervisor->pnumber=$request->input('pnumber');
            $supervisor->email=$request->input('email');
            $supervisor->password=$request->input('password');
            if($supervisor->save())
            {
                session()->flash('success','Profile Updated Successfully!');
                return back();
            }
            else {
                session()->flash('error','Profile Not Updated.');
                return back();
            }
        }
        catch(Exception $e) {
            Log::error($e->getMessage());
            session()->flash('error','An error occurred. Please try again.');
            return back();
        }
    }
    public function index(Request $request){
        try
        { 
            $allpurposel=preliminaryproposal::where('superviserid',Session::get('supervisorid'))
            ->where('purposelstatus', 'NotApproved')
            ->count();
            $allaccepted=preliminaryproposal::where('superviserid',Session::get('supervisorid'))
            ->where('purposelstatus', 'approved')
            ->count();
            $allfile = fileuploud::where('sharedby', 'supervisor')
            ->where('sharedbyid',Session::get('supervisorid'))
            ->count();
            $totalstudent=preliminaryproposal::where('superviserid',Session::get('supervisorid'))
            ->where('purposelstatus', 'approved')
            ->get();
            $count=0;
            foreach($totalstudent as $item)
            {
                $student=studentgroups::find($item->groupid);
                if($student)
                {
                    if($student->m1regno != 0) 
                    {
                    $count++;
                    }
                    if($student->m2regno != 0) 
                    {
                    $count++;
                    }
                    if($student->m3regno != 0) 
                    {
                    $count++;
                    }
                }
                
            }
            return view('Superviser.home',compact('allpurposel','allaccepted','allfile','count'));

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function assignweight($id){
        try
        { 
            // $group=studentgroups::find($id);
            $weightage = projectweightage::where('purposelid',$id)->first();
            if($weightage)
            {
                $data=json_decode($weightage->keyNvalue, true);
            }
            else
            {
                $data=null;
            }
            return view('Superviser.assign-weight-for-project',compact('id','data'));

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function assignvalues($id){
        try
        { 
            // $group=studentgroups::find($id);
            $weightage = projectweightage::where('purposelid',$id)->first();
            // return $weightage;
            $keyNvalueArray = json_decode($weightage->keyNvalue, true);
            if(!empty($keyNvalueArray))
            {
                if($weightage->valuesofweighatage)
                {
                    $id=$weightage->id;
                    $data=json_decode($weightage->valuesofweighatage, true);
                    return view('Superviser.assign-values-for-project',compact('id','data'));
                }
            }
            else
            {
                $data=null;
                return redirect('Superviser/assign-weight/' . $id)->with('error', 'Create filed first!');
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function saveweightform(Request $request){
        try{
            // return $request;
            $jsonData = [];
            $jsonvalues = [];
            $totalvalue=0;
            if($request->all() > 1)
            {
                // Loop through all input fields and build the JSON structure
                foreach ($request->all() as $key => $value) {
                    // Exclude the _token and other fields if needed
                    if ($key !== '_token' && $key !== 'name' && $key !== 'id'  ) {
                        $jsonData[$key] = $value;
                        $jsonvalues[$key] = 0;
                        $totalvalue += $value;
                    }
                }
                if($totalvalue != 0 && $totalvalue != 100 || $totalvalue != 0 &&  $totalvalue > 100 )
                {
                    session()->flash('error','Weightage of Each Project Must be 100%');
                    return back();
                }
                $findfields =projectweightage::where('purposelid',$request->id)->first();
                if($findfields)
                {
                    $findfields->keyNvalue=json_encode($jsonData);
                    $findfields->valuesofweighatage=json_encode($jsonvalues);
                    if($findfields->save()){
                        session()->flash('success','Update successfully!');
                        return back();
                    }
                    else session()->flash('error','An error occurred. Please try again.');
                    return back();
                }
                else
                {
                    $weightagefields = new projectweightage;
                    $weightagefields->supervisorid =Session::get('supervisorid');
                    $weightagefields->purposelid =$request->id;
                    $weightagefields->keyNvalue=json_encode($jsonData);
                    $weightagefields->valuesofweighatage=json_encode($jsonvalues);
                    
                    if($weightagefields->save()){
                        session()->flash('success','Saved successfully!');
                        return back();
                    }
                    else session()->flash('error','An error occurred. Please try again.');
                    return back();
                }
                
            }
            else{
                session()->flash('error','Minimum 1 Field is requird!');
                return back();
            }
            
        }
        catch(Exception $e) {
            Log::error($e->getMessage());
            session()->flash('error','An error occurred. Please try again.');
            return back();
        }
    }
     /* Edit */
     public function saveassignvalues(Request $request){
        try{
            $record = projectweightage::find($request->id);
            // return $record;
            $jsonData = [];
            foreach ($request->all() as $key => $value) {
                // Exclude the _token and other fields if needed
                if ($key !== '_token' && $key !== 'id'  ) {
                    $jsonData[$key] = $value;
                }
            }
            if($record) {
                    $record->valuesofweighatage=json_encode($jsonData);
                    if($record->save())
                    {
                        session()->flash('success','Saved successfully!');
                        return back();
                    }
            } else {
                session()->flash('error','An error occurred. Please try again.');
                return back();
            }
           
        }
        catch(Exception $e) {
            Log::error($e->getMessage());
            session()->flash('error','An error occurred. Please try again.');
            return back();
        }
    }

    // /* Update */
    // public function updateweightaage(Request $request){
    //     try{
    //         $request->validate([
    //             'name' => 'required',
    //         ]);
    //         $repair = projectweightage::find($request->id);
    //         $email = $request->status==$repair->status ? false : true;
    //         $repair->name = $request->name;
    //         $repair->status = $request->status;
    //         $repair->updated_by = Auth::user()->id;
    //         $repair->phone = $request->phone;
    //         $repair->email = $request->email;
    //         $repair->brand = $request->brand;
    //         $repair->color = $request->color;
    //         $repair->type = $request->type;
    //         $repair->prior_work = $request->prior_work;
    //         $repair->accessories = $request->accessories;
    //         $repair->work_requested = $request->work_requested;
    //         $repair->warranty = $request->warranty;
    //         $repair->note = $request->note;
    //         $repair->hours = $request->hours;
    //         $repair->hour_rate = $request->hour_rate;
    //         $repair->technician_notes = $request->technician_notes;

    //          //extra-fields-entry-start
             
    //             $inputData = $request->all();
    //             $exFields = projectweightage::where('repairID',$request->id)->first();
    //             $excludedInputNames = ['id','status','name','technician_notes','hours','hour_rate', 'phone','email','brand','color','type','prior_work','accessories','work_requested','warranty','note','_token']; // Add the names you want to exclude
    //         if(!empty($exFields)) {
    //             $jsonData=[];
    //             foreach ($inputData as $key => $value) {
    //                 if (!in_array($key, $excludedInputNames)) {
    //                     $jsonData[$key]=$value;
                        
    //                 }
    //             }
    //             $exFields->keyNvalues=json_encode($jsonData);
    //             $exFields->save();
    //         } 

    //          // extra-fields-entry-end
    //         if($email) $repair->status_date = date('Y-m-d');
    //         if($repair->save()){
    //             session()->flash('success','Updated successfully!');
    //             if($email) app()->call(HomeController::class.'@sendMailInvoice', ['invoice' => $repair->token]);
    //         }
    //         else session()->flash('error','An error occurred. Please try again.');
    //         return back();
    //     }
    //     catch(Exception $e) {
    //         Log::error($e->getMessage());
    //         session()->flash('error','An error occurred. Please try again.');
    //         return back();
    //     }
    // }

    // /* Delete */
    // public function deleteweightaage($id){
    //     try{
    //         $repair = projectweightage::findOrFail($id);
    //         $exFields = projectweightage::where('repairID', $id)->delete();

    //         if($repair->delete()) session()->flash('success','Deleted successfully!');
    //         else session()->flash('error','An error occurred. Please try again.');
    //         return back();
    //     }
    //     catch(Exception $e) {
    //         Log::error($e->getMessage());
    //         session()->flash('error','An error occurred. Please try again.');
    //         return back();
    //     }
    // }
    public function groupspurposel(Request $request){
        try
        { 
            $allpurposel=preliminaryproposal::where('superviserid',Session::get('supervisorid'))
            ->where('purposelstatus', 'NotApproved')
            ->get();
            return view('Superviser.group-purposels',compact('allpurposel'));

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function supervisoraction(Request $request){
        try
        { 
            // return $request;
            $purposel=preliminaryproposal::where('superviserid', Session::get('supervisorid'))
            ->where('purposelstatus','NotApproved')
            ->where('id',$request->id)
            ->first();
            if($purposel)
            {
                $purposel->purposelreason=$request->reason;
                $purposel->purposelstatus=$request->flexRadioDefault;
                if($purposel->save())
                {
                    return redirect('Superviser/leading-group')->with('success', 'Purposel Submited!');
                }
            }
            else
            {
                return back()->with('error','Purposel Not Submited.');
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
        
    }
    public function leadinggroups(Request $request){
        try
        { 
            // approved
            $session=sessionmodel::get();
            $allpurposel=preliminaryproposal::where('superviserid',Session::get('supervisorid'))
            ->where('purposelstatus', 'approved')
            ->get();
           return view('Superviser.leading-group',compact('allpurposel','session'));

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
    public function supervisorselectgroupaccordingsession($session){
        try
        {
            $allgrouprecord=preliminaryproposal::where('superviserid',Session::get('supervisorid'))
            ->where('purposelstatus', 'approved')
            ->get();
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
                        $item->studentgroup->studentsrecords->name ? $leader=$item->studentgroup->studentsrecords->name : $leader='z';
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
                            'projecttitle' => $item->projectname,
                            'leader' => $leader,
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
    public function grouprecords($id){
        // return $id;
        try
        {
            $grouprecord=Studentgroups::find($id);
            // return view('Superviser.group-detail',compact('grouprecord'));

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
                     return view('Superviser.group-detail',compact('studentregnos'));
            }
            // dd($studentregnos );
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function purposelaction($id){
        try
        { 
            $purposel=preliminaryproposal::find($id);
            return view('Superviser.action-on-purposel',compact('purposel'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }   
    public function groupdetail(Request $request){
        try
        { 
            return view('Superviser.group-detail');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function groupprogress(Request $request){
        try
        { 
            return view('Superviser.group-progress');
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function sharefile(Request $request){
        try
        { 
            $allgroup=studentgroups::get();
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
                    $groupsupervisor=preliminaryproposal::where('superviserid',Session::get('supervisorid'))
                    ->where('groupid',$item->id)
                    ->first();
                    if($groupsupervisor)
                    {
                        $allgrouparry[]=$item;
                    }
                }
            }
            $allfile=fileuploud::where('sharedbyid',Session::get('supervisorid'))->get();
            return view('Superviser.share-file',compact('allfile','allgrouparry'));

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
                //  $fileContent = Storage::get($filePath);
                //  $mimeType = Storage::mimeType($filePath);
                //  return (new Response($fileContent, 200))->header('Content-Type', $mimeType);
                // downloud the file
                return response()->file($filePath);
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
    public function uploudindividualfile(Request $request){
        try
        { 
            $request->validate([
                'file' => 'file|mimes:pdf,doc,docx,txt|max:2048',
            ]);
            // return $request->all();
    
            $fileuploud=new fileuploud;
            if($request->has('file') && $request->has('select'))
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
                $fileuploud->sharedby='supervisor';
                $fileuploud->sharedbyid = Session::get('supervisorid');
                $fileuploud->filename = $newFilename;
                $fileuploud->sharedwith='student';
                $fileuploud->sharedwithid = $request->input('select');
    
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
    public function uploudfile(Request $request){
        try
        { 
            $request->validate([
                'file' => 'file|mimes:pdf,doc,docx,txt|max:2048',
            ]);
            // return $request->all();
    
            $fileuploud=new fileuploud;
            if($request->has('pmo') || $request->has('student'))
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
                $fileuploud->sharedby='supervisor';
                $fileuploud->sharedbyid = Session::get('supervisorid');
                $fileuploud->filename = $newFilename;
    
                if($request->has('pmo'))
                {
                    $fileuploud->sharedwith='pmo';
                    $fileuploud->sharedwithid = 'pmo';
                }
                if($request->has('student'))
                {
                    $fileuploud->sharedwith='student';
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
    public function viewfile(Request $request){
        try
        { 
            $allfile = fileuploud::where('sharedwith', 'supervisor')
            ->where('sharedwithid',Session::get('supervisorid'))
            ->orwhere('sharedwithid','supervisor')
            ->get();
            return view('Superviser.view-file',compact('allfile'));

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
       
    }
    public function meetingslot(Request $request){
        try
        { 
            $allmeeting=supervisormeetingstime::where('supervisorid',Session::get('supervisorid'))->get();
            return view('Superviser.meeting-slot',compact('allmeeting'));
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    }
    public function deletemeetingtime($id){
        try
        { 
            $meeting=supervisormeetingstime::find($id);
            if($meeting->delete())
            {
            return back()->with('success',"Meeting Time Deleted!");
            }
            else{
            return back()->with('error',"Meeting Time Not Deleted.");
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function addmeetingslot(Request $request){
        try
        { $meeting=new supervisormeetingstime; 
            $meeting->datetime=$request->time;
            $meeting->date=$request->date;
            $meeting->detail=$request->detail;
            $meeting->day=$request->select;
            $meeting->supervisorid=Session::get('supervisorid');
            if($meeting->save())
            {
               return back()->with('success',"Meeting Time Add!");
            }
            else{
               return back()->with('error',"Meeting Time Not Add.");
            }

        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    }
    public function readnews(Request $request){
        try
        { 
            $news = news::whereIn('sharedfor', ['superviser', 'both'])->get();
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
            $news=superviser::find(Session::get('supervisorid'));
            // $news = superviser::where('totalviewnews','1')->first();
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
            $supervisor=superviser::find(Session::get('supervisorid'));
            $supervisor->totalviewnews = 0;
            if($supervisor->save())
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
