<?php

namespace App\Http\Livewire;

use App\Models\Fatorh;
use App\Models\Team;
use Exception;
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
            'invokes'=>$this->getdate(),
        ]);
    }

    private function getdate()
    {
       // $teams= Team::select('id')->where('project_id', $this->slag)->distinct()->get('id');
 
         return Fatorh::where('project_id',$this->slag)->with('images')->orderBy('id','DESC')->get();
         
    }
}
