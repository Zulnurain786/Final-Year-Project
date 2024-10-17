<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class loginmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $emaill = 'user@example.com'; // Replace with actual email
        // $rolee = 'user'; // Replace with actual role
        // session(['email' => $emaill, 'role' => $rolee]);
        $email=$request->session()->get('email');
        $pmoid=$request->session()->get('pmoid');
        $role=$request->session()->get('role');
        // Logic to redirect based on roles
        if ($role === '1' && !empty($email) && !empty($pmoid)) {
            // Allow access for admin role
            return $next($request);
        } 
        //elseif ($role === 'user') {
        //     // Redirect users with 'user' role to a specific route
        //     return redirect()->route('user.dashboard');
        // } elseif ($role === 'moderator') {
        //     // Redirect users with 'moderator' role to a different route
        //     return redirect()->route('moderator.dashboard');
        // }
         else {
            // Handle other cases (unauthorized access, etc.)
            // abort(403, 'Unauthorized');
            return redirect('/');
        }
        // return $next($request);
    }
}
