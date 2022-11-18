<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Home;
use App\Models\Compane;
use App\Models\Projct;
use LivewireUI\Modal\ModalComponent;

class CrudProject extends ModalComponent
{

    protected $listeners = ['crudproject' => 'render'];

    public $name, $code, $compane_id,$companes;
 
 
 

    public function render()
    {
        return view('livewire.modal.crud-project',
        [
           'compnes'=> Compane::all() 
        ]
    );
    }

 

    protected $rules = [
               'name' => 'required',
               'code' => 'required',
               'compane_id' => 'required',
          ];




    public function store()
    {
       $this->validate();

        Projct::create([
            'name' => $this->name,
            'code' =>  $this->code,
            'compane_id' =>  $this->compane_id,
            'user_id' =>  auth()->user()->id
        ]);


        $this->closeModalWithEvents([
            Home::getName() => 'home',
        ]);

    }

    public function  resetInput(){
         $this->name ="";
           $this->code="";
          $this->compane_id="";
    }

}
