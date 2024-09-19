<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Auth allows us to grab the current user
        // admin is from kernel
        if(!Auth::guard('admin')->check()){
            // dd('hello');
            return redirect()->route('admin.login.index')->with('error', 'Please login first');
        }


        return $next($request);
    }
}
