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
    public function handle(Request $request, Closure $next, string $permission)
    {
        $user = Auth::user();
        if(!empty($user))
        {
        
            $permissions = Auth::user()->isPermission($permission);
            if(!$permissions)
            {
                abort(403);
            }
            return $next($request);
        }
        abort(403);
        
    }

}
