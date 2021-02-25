<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PermissionsManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::loginUsingId(1);
        if(!empty($user))
        {

            $permissions = Auth::user()->isPermission(4);
            if(!$permissions)
            {
                abort(404);
            }
            return $next($request);
        }
        
    }

}
