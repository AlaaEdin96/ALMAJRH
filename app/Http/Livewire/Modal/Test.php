<?php

namespace App\Http\Livewire\Modal;

 
use LivewireUI\Modal\ModalComponent;

class Test extends ModalComponent
{
public $text,$event=null;

    public function render()
    {
        return view('livewire.modal.test');
    }

    public function click()
    {
        $this->emit($this->event);
        session()->flash('message', 'Post successfully updated.');

       $this->closeModal();
    }
}
