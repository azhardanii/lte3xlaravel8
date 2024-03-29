<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {                                 
        if (in_array(auth()->user()->role, $roles)) {
            return $next($request);
        }        
    
        abort(403, "Tidak Memiliki Hak Akses untuk Halaman ini!");        
    }
}
