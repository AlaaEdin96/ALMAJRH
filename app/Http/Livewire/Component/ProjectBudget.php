<?php

namespace App\Http\Livewire\Component;

use App\Models\Fatorh;
use App\Models\Maleh;
use App\Models\Team;
use Livewire\Component;

class ProjectBudget extends Component
{
    public $project_id;
    
        public function render()
    {
        $teams= Team::select('id',)->where( 'project_id',$this->project_id)->distinct()->get('id');
//dd(Maleh::whereIn('tem_id',$teams)->sum('mony'));

        return view('livewire.component.project-budget',[
            'mony'=>Fatorh::whereIn('tem_id',$teams)->whereNotNull('check_user_id')->sum('mony'),
        ]);
    }
}
