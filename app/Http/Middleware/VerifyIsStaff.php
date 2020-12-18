<?php

namespace App\Http\Middleware;

use Closure;

class VerifyIsStaff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isStaff()){
            return $next($request);
        } elseif (auth()->user()->isAdmin() || auth()->user()->isSuperAdmin()){

            return redirect()->route('admin.profile');

        } elseif (auth()->user()->isParent()) {
            return redirect()->route('home');
        }
        elseif (auth()->user()->isStudent()) {
            return redirect()->route('home');
        }

        //return redirect()->route('staff.profile');
    }
}
