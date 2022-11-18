<?php

namespace App\Http\Middleware;

use App\Models\Fatorh;
use App\Models\Projct;
use App\Models\Team;
use Closure;
use Illuminate\Http\Request;

class IsHasInvoke
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $team=Team::where('team_id',auth()->user()->id)->where('project_id',$request->id)->get();
    //    $fatorh=Fatorh::where('tem_id',$team)->get();
        $projet= Projct::where('id',$request->id)->get();
     
        if (!$team->isEmpty()) {
            return $next($request);
        }


        if (IsAdmin()) {
            return $next($request);
        }
        
      
            return redirect('404');
        
        
    }
}
