<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Component\User as ComponentUser;
use App\Models\Images;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CrudUser extends ModalComponent

{
    use WithFileUploads;
    public $name,$password,$email,$password_conf;
    public $photos=[];
    public $tayp='user';


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

$user= User::create( [
    'password' =>Hash::make($this->password) ,
    'name' =>  $this->name,
    'email' =>  $this->email,
    'role' =>  $this->tayp,
]);

$this->saveimg($user->id);
 $this->closeModalWithEvents([
    CrudTeam::getName() => 'refrech',
    CreatSponser::getName() => 'refrech',
    ComponentUser::getName() => 'refrech',
]);
}

     private function go($id)
    {
       return  to_route('profileuser', ['id'=>$id]);
       
     }


     private function saveimg($var)
     {
          Images::create([
            'url' => str_ireplace("public","",$this->photos[0]->store('public/photos')),
            'image_type' => 'image/jpg',
            'parentable_id' => $var,
            'parentable_type' => User::class
         ]);

     }

}
