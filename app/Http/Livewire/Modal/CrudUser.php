<?php

namespace App\Http\Livewire\Modal;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class CrudUser extends ModalComponent
{
    public $name,$password,$email,$password_conf;


    public function render()
    {
        return view('livewire.modal.crud-user');
    }

    protected $rules = [
        'name' => 'required',
        'password' => 'required',
        'email' => 'required|email',
        'password_conf' => 'required|same:password',
   ];

   public function store()
{


$this->validate();

 User::create( [
    'password' => $this->password,
    'name' =>  $this->name,
    'email' =>  $this->email,
]);

 $this->closeModalWithEvents([
    CrudTeam::getName() => 'refrech',
]);

}
}
