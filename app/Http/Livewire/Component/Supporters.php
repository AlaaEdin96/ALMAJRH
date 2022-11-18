<?php

namespace App\Http\Livewire\Component;

use App\Models\Team;
use App\Models\User;
use Livewire\Component;

class Supporters extends Component
{
    public $project_id;
    protected $listeners = ['refrech' => 'render'];

    public function render()
    {
        return view('livewire.component.supporters',
        ['sponsers'=>Team::where('tayp','sponsers')->where('project_id',$this->project_id)->get()]
    );
    }
}
