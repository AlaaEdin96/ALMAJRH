<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.profile'
           ,[
            'user'=>User::find(1),
           ]
    );
    }
}
