<?php

namespace App\Http\Livewire\Modal;

use App\Models\Compane;
use LivewireUI\Modal\ModalComponent;

class CrudCompane extends ModalComponent
{

    public $text;


    public function render()
    {
        return view('livewire.modal.crud-compane');
    }


    protected $rules = [
        'text' => 'required',

   ];



public function store()
{


$this->validate();

Compane::create( [
    'name' => $this->text,
    'logo' =>  0,
    'user_id' =>  auth()->user()->id,
    'code_register'=>str()->random(rand(20,30))
   ,

]);


 session()->flash('message', 'Post successfully updated.');

 $this->closeModalWithEvents([
    CrudProject::getName() => 'crudproject',
]);


}

}
