<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class About extends Component
{
    public  $project;
    public function render()
    {
        return view('livewire.component.about');
    }
}
