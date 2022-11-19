<?php

namespace App\Http\Livewire\Component;

use App\Models\Mission;
use App\Models\Task;
use Livewire\Component;

class Taskes extends Component
{
    public $project_id;
    protected $listeners = ['taskcomponentref' => 'render'];


    
    public function render()
    {
         
        return view('livewire.component.taskes', ['taskes' =>Task::where('hed_task_id',$this->project_id)->get()]);
    }
}
