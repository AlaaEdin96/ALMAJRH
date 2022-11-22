<?php

namespace App\Http\Livewire\Component;

use App\Models\Finance;
use Livewire\Component;

class Treasury extends Component
{
   public $moyne;

    public function mount()
    {
       $this->moyne = Finance::all();
    }
    public function render()
    {
        return view('livewire.component.treasury');
    }
}
