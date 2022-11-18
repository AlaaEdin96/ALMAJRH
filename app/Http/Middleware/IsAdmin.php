<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{ 
    public function handle(Request $request, Closure $next)
    {
        if (!IsAdmin()) {
            return redirect('404');
        }
    
        return $next($request);
    }
}
