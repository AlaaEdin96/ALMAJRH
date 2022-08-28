<?php

namespace App\Http\Livewire;

use App\Models\Compane;
use App\Models\Mission;
use App\Models\Projct;
use Livewire\Component;

class CompaneProfile extends Component
{
    public $slag;

    protected $listeners = ['refrech' => 'render'];


    public function render()
    {
        return view('livewire.compane-profile',[
            'compane'=>Compane::with('users')->find($this->slag),
            'missions'=>Mission ::with('images')->orderBy('id','DESC')->get(),
            'projecrts'=>Projct ::where('compane_id',1)->orderBy('id','DESC')->get(),
        ]);
    }
}
