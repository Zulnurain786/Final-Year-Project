<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class supervisorloginmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $supervisorid=$request->session()->get('supervisorid');
        $email=$request->session()->get('email');
        $role=$request->session()->get('role');
        // Logic to redirect based on roles
        if ($role === '2' && !empty($supervisorid) && !empty($email)) {
            // Allow access for admin role
            return $next($request);
        } 
        else {
            return redirect('supervisor-login');
        }
        // return $next($request);
    }
}
