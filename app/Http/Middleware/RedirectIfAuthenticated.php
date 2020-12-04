<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        
       switch ($guard) {          
            case 'alumno':
                if (Auth::guard($guard)->check()) {
                    return redirect('/alumno');
                }
            case 'docente':
                if (Auth::guard($guard)->check()) {
                    return redirect('/director');
                }    
            case 'padre':
                if (Auth::guard($guard)->check()) {
                    return redirect('/padre');
                }
        }
         
        /*if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }*/
               
        return $next($request);
    }
}
