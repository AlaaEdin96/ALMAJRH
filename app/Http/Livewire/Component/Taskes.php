<?php

namespace App\Http\Livewire\Component;

use App\Models\Task;
use Livewire\Component;

class Taskes extends Component
{
    public $project_id;
    protected $listeners = ['taskcomponentref' => 'render'];


    
    public function render()
    {
        return view('livewire.component.taskes', ['taskes' =>Task::all()]);
    }
}
