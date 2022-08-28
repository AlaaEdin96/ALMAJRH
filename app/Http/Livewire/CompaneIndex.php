<?php

namespace App\Http\Livewire;

use App\Models\Compane;
use App\Models\Projct;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CompaneIndex extends Component
{
    public  $role; 


    public function mount()
    {
       $this->role=Auth::user()->role;
    }

    public function render()
    {
         return view('livewire.compane-index',[
            'companes'=> Compane::all(),
        ]);
    }
}
