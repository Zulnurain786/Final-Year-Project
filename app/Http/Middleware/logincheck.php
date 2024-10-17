<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;


class logincheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if (Str::contains($request->url(), 'student-login')) {
        //     // URL contains "student-login"
        //     // Your code here
        // } else {
        //     // URL does not contain "student-login"
        //     // Your code here
        // }
        // $email=$request->session()->get('email');
        // $pmoid=$request->session()->get('pmoid');
        // $role=$request->session()->get('role');
        // // Logic to redirect based on roles
        // if ($role === '1' && !empty($email) && !empty($pmoid)) {
        //     // Allow access for admin role
        //     return $next($request);
        // } 
        $urls=['/','student-login','supervisor-login'];
        if (str_contains($request->url(), '/')) {
            $email=$request->session()->get('email');
            $pmoid=$request->session()->get('pmoid');
            $role=$request->session()->get('role');
            // Logic to redirect based on roles
            if ($role === '1' && !empty($email) && !empty($pmoid)) {
                // Allow access for admin role
                // return $next($request);
                return redirect('PMO/home');
            } 
        }
        if (str_contains($request->url(), 'student-login')) {
            $groupid=$request->session()->get('groupid');
            $projectid=$request->session()->get('projectid');
            $role=$request->session()->get('role');
            // Logic to redirect based on roles
            if ($role === '3' && !empty($groupid) && !empty($projectid)) {
                return redirect('Student/home');
            } 
        }
        if (str_contains($request->url(), 'supervisor-login')) {
            $supervisorid=$request->session()->get('supervisorid');
            $email=$request->session()->get('email');
            $role=$request->session()->get('role');
            // Logic to redirect based on roles
            if ($role === '2' && !empty($email) && !empty($supervisorid)) {
                return redirect('Superviser/home');
            } 
        }
        // foreach ($urls as $url) {
        //     if (str_contains($request->url(), $url)) {
        //         $email=$request->session()->get('email');
        //         $pmoid=$request->session()->get('pmoid');
        //         $role=$request->session()->get('role');
        //         // Logic to redirect based on roles
        //         if ($role === '1' && !empty($email) && !empty($pmoid)) {
        //             // Allow access for admin role
        //             // return $next($request);
        //             return redirect('PMO/home');
        //         } 
        //     }
        // }
        return $next($request);
    }
}
