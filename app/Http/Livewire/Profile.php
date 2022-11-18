<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $slag;

    public function render()
    {
        return view('livewire.profile'
           ,[
            'user'=>$this->getdata(),
           ]
    );
    }
    private function getdata()
    {
         
       if ($this->slag == 'my profile') {
        return User::find(auth()->user()->id);
       }
       return User::find($this->slag);
    }
    
}
