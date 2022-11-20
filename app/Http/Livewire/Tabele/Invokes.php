<?php

namespace App\Http\Livewire\Tabele;

use App\Models\Fatorh;
use Livewire\Component;

class Invokes extends Component
{
    public function render()
    {
        return view('livewire.tabele.invokes',[
            'fatorhs'=>Fatorh::paginate(6),
        ]);
    }
}
