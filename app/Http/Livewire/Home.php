<?php

namespace App\Http\Livewire;

use App\Http\Traits\DateTimeImageTrait;
use App\Models\Projct;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    use DateTimeImageTrait;
 
public $role ;

 

    protected $listeners = ['home' => 'render'];


    public function mount()
    {
       $this->role=Auth::user()->role;
    
    }

    public function render()
    {
        
       
        return view('livewire.home',
    [
        'projects'=> $this->date(),
    ]);

    
    
    }

 


function reteruserprojects(){
  
    $teams= Team::select('project_id',)->where('team_id', Auth::id())->distinct()->get('project_id');
     
    return Projct::whereIn('id',$teams)->get();
}



    function date(){
         $type=
        [  
            

             'admin'=>  Projct::all(),
             'user'=>  $this->role == null ?[]:$this->reteruserprojects(),
             'companes'=> Projct::where('compane_id',Auth::user()->compane_id)->get(),

     ];

            return  $type[$this->role];

     /*  if ($user[0]->role =='admin') {
            return Projct::all() ;
          }
         
          if ($user[0]->role !=='admin') {
            return  $user[0]->teams->isEmpty() ? []:$this->reteruserprojects();
          }*/
    }
}
