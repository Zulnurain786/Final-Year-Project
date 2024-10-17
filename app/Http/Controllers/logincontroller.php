<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\superviser;
use App\Models\pmo;
use App\Models\allgroupslogin;


class logincontroller extends Controller
{
    public function pmologin(Request $request)
    {
        try
        { 
            $record = pmo::where('email', $request->email)
            ->where('password', $request->password)
            ->where('loginstatus',1)
            ->first();
            if($record)
            {
                $emaill = $request->email; // Replace with actual email
                $password = $request->password; // Replace with actual password
                $rolee = '1'; // Replace with actual role
                $pmoid=$record->id;// for current pmo profile update
                session(['email' => $emaill, 'role' => $rolee,'pmoid'=>$pmoid]);
                return redirect(route('PMO.home'));
            }
            else {
                return back()->with('error','Email or Password is Incorrect!');
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    } 
    public function supervisorlogin(Request $request)
    {
        try
        { 
            $record = superviser::where('email', $request->email)
            ->where('password', $request->password)
            ->where('loginstatus',1)
            ->first();
            if($record)
            {
                $emaill = $request->email; // Replace with actual email
                $name = $record->name; // Replace with actual email
                $password = $request->password; // Replace with actual password
                $rolee = '2'; // Replace with actual role
                $supervisorid=$record->id;// for current pmo profile update
                // session(['email' => $emaill, 'role' => $rolee,'supervisorid'=>$supervisorid,'name'=>$name]);
                session([
                    'email' => $emaill,
                    'role' => $rolee,
                    'supervisorid' => $supervisorid,
                    'name' => $name,
                ]);
                return redirect(route('Superviser.home')); 
            }
            else {
                return back()->with('error','Email or Password is Incorrect!');
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
    } 
    public function grouplogin(Request $request)
    {
        try
        { 
            // $emaill = 'user@example.com'; 
            // $rolee = '3'; 
            $record = allgroupslogin::where('projectid', $request->projectid)
            ->where('password', $request->password)
            ->where('loginstatus', 1)
            ->first();
            // return $record;
            if ($record) {
                $projectid = $request->projectid; 
                $rolee = '3'; 
                $password=$request->password;
                $id=$record->id;
                session(['role' => $rolee,'projectid'=>$projectid,'groupid'=>$id]);
                return redirect(route('Student.home'));
            } else {
                return back()->with('error','Project-ID or Password is Incorrect!');
            }
        }
        catch (\Exception $e) 
        {
            return back()->with('error', 'Error:' . $e->getMessage());
        }
        
    } 
        
}
