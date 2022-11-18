<?php

namespace App\Http\Livewire;

use App\Models\Mission;
use App\Models\Projct;
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
        $teams= Team::select('id',)->where('project_id', $this->slag)->distinct()->get('id');
      
         return Mission::whereIn('id',$teams)->with('images')->orderBy('id','DESC')->get();
         
    }
}
