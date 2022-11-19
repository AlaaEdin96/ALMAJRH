<?php

namespace App\Http\Livewire;

use App\Models\Mission;
use App\Models\Projct;
use App\Models\Task as ModelsTask;
use App\Models\Team;
use Livewire\Component;

class Task extends Component
{

    public $slag;

    protected $listeners = ['refrech' => 'render'];

    public function render()
    {

        return view('livewire.task',[
            'projct'=>Projct::find($this->slag),
            'missions'=>$this->getdate(),
        ]);
    }

    private function getdate()
    {
        //$teams= Team::select('id')->where('project_id', $this->slag)->distinct()->get('id');
      $taskes = ModelsTask::select('id')->where('hed_task_id',$this->slag)->distinct()->get();
         return Mission::whereIn('body_task_id',$taskes)->with('images')->orderBy('id','DESC')->get();
         
    }
}
