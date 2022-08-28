<?php

namespace App\Http\Livewire;

use App\Models\Mission;
use App\Models\Projct;
use Livewire\Component;

class Task extends Component
{

    public $slag;

    protected $listeners = ['refrech' => 'render'];

    public function render()
    {

        return view('livewire.task',[
            'projct'=>Projct::find($this->slag),
            'missions'=>Mission::with('images')->orderBy('id','DESC')->get(),
        ]);
    }
}
