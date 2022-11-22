<?php

namespace App\Http\Livewire\Modal;

use App\Models\Task;
use LivewireUI\Modal\ModalComponent;

class CrudTask extends ModalComponent
{
    public $text,$project_id;



    
   

    public function render()
    {
    
        return view('livewire.modal.crud-task');
    }


    protected $rules = [
        'text' => 'required',

   ];




public function store()
{


$this->validate();

 Task::create( [
    'taitl' => $this->text,
    'order' =>  0,
    'project_id' =>  $this->project_id,
    'user_id' =>  1
]);
 $this->resetInput();
 $this->emit('taskcomponentref');
 session()->flash('message', 'Post successfully updated.');
}


public function  resetInput(){
    $this->text ="";

}



}
