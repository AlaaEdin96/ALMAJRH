<?php

namespace App\Http\Livewire\Component;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{

    protected $listeners = ['refrech' => 'render'];

    public function render()
    {
        return view('livewire.component.user',[
            'users'=>ModelsUser::with('images')->orderBy('id','DESC')->get(),
        ]);
    }
}
