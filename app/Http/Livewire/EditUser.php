<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public $name, $code, $compane, $user_id,$message;
    public function render()
    {
        return view('livewire.edit-user');
    }

    public function stor()
    {
        dd($this->name);
    }
}
