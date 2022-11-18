<?php

namespace App\Http\Livewire\Modal;

 
use LivewireUI\Modal\ModalComponent;

class Test extends ModalComponent
{
public $text;

    public function render()
    {
        return view('livewire.modal.test');
    }
}
