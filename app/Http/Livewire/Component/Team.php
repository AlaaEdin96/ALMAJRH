<?php

namespace App\Http\Livewire\Component;

use App\Models\Team as ModelsTeam;
use App\Models\User;
use Illuminate\Routing\Route;
use Livewire\Component;

class Team extends Component
{
    public $project_id;

    protected $listeners = ['refrech' => 'render'];

    public function render()
    { 
        
       // dd(ModelsTeam::where('project_id',$this->project_id)->get());
        return view('livewire.component.team',
    [
       // ModelsTeam::where('project_id',$this->project_id)->where('tayp','worker')->get()
        'taems'=> ModelsTeam::where('project_id',$this->project_id)->get(),
    ]
    );
    }

    public function go($id)
    {
       return  to_route('profileuser', ['id'=>$id]);
       
     }
}
