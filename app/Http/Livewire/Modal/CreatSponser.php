<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Component\Supporters;
use App\Models\Team;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class CreatSponser extends ModalComponent
{
    public $spons_id,$project_id;
    protected $listeners = ['refrech' => 'render'];

    protected $rules = [
        'spons_id' => 'required',

   ];

    public function render()
    {
        return view('livewire.modal.creat-sponser',[
            'sponses'=>User::where('role','sponsers')->get(),
        ]);
    }

    

    public function store()
    {
       $this->validate();
    
        Team::create([
            'team_id'=>$this->spons_id,
            'project_id'=>$this->project_id,
            'creted_by_user_id' =>auth()->user()->id,
            'tayp'=>'sponsers'  
        ]);

        $this->closeModalWithEvents([
            Supporters::getName() => 'refrech',
        ]);
    }
}
