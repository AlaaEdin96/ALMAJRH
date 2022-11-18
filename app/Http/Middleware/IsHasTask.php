<?php

namespace App\Http\Middleware;

use App\Models\Projct;
use App\Models\Team;
use Closure;
use Illuminate\Http\Request;

class IsHasTask
{
   
    public function handle(Request $request, Closure $next)
    {
       $projet= Projct::where('id',$request->id)->get();
        $projects=Team::where('team_id',auth()->user()->id)->where('project_id',$request->id)->get();
        
        if ($projet->isEmpty()) {
              return redirect('404');
        }


        if (IsAdmin()) {
            return $next($request);
        }
        
        if ($projects->isEmpty()) {
            return redirect('404');
        }

        

       

        return $next($request);
    }
}
