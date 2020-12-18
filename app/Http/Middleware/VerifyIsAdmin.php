<?php

namespace App\Http\Middleware;

use Closure;

class VerifyIsAdmin
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
        if(auth()->user()->isAdmin() || auth()->user()->isSuperAdmin()){
            return $next($request);
        } elseif (auth()->user()->isStaff()){

            return redirect()->route('staff.profile');

        } elseif (auth()->user()->isParent()) {
            return redirect()->route('home');
        }
        elseif (auth()->user()->isStudent()) {
            return redirect()->route('home');
        }

        //return redirect()->route('admin.profile');
    }
}
