<?php

namespace App\Http\Livewire;

use App\Models\Fatorh;
use App\Models\Team;
use Livewire\Component;

class Invoke extends Component
{
   public $slag;
   protected $listeners = ['refresh' => 'render'];



    public function render()
    {
        //dd(Fatorh::with('images')->orderBy('id','DESC')->get());
       
        return view('livewire.invoke',[
         //   'supporters'=> Team::all(),
            'invokes'=>Fatorh::with('images')->orderBy('id','DESC')->get(),
        ]);
    }
}
