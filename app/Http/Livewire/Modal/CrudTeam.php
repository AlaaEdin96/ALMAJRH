<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Component\Team as ComponentTeam;
use App\Models\Team;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class CrudTeam extends ModalComponent
{
     public $team_id, $project_id;

     
     protected $listeners = ['refrech' => 'render'];


    public function render()
    {
        return view('livewire.modal.crud-team',
    [
        'teams'=>User::where('role','admin')->orWhere('role','user')->get(),
    ]);
    }


    protected $rules = [
        'team_id' => 'required',

   ];




public function store()
{


$this->validate();

 Team::create( [

    'team_id' =>$this->team_id,
    'project_id' =>$this->project_id,
    'creted_by_user_id' =>1,
    'tayp' => 'worker',
]);

 $this->closeModalWithEvents([
    ComponentTeam::getName() => 'refrech',
]);
}


}
