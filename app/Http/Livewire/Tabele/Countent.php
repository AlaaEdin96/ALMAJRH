<?php

namespace App\Http\Livewire\Tabele;

use App\Models\Team;
use Livewire\Component;

class Countent extends Component
{

    protected $listeners = ['Filtar' => 'get_date'];
    public $project= null;


    private $objFoo;

 
    public function mount()
    {


      if ($this->project == null) {
         $this->project=Team::with(['finances','fatorhs'])->first();

        }
    }

    public function render()
    {
       // $this->get_date(2);
        return view('livewire.tabele.countent');
    }


    public function get_date($date)
    {
       
         $this->project = Team::where('id',$date)->with(['finances','fatorhs'])->first();

     $this->render();
     //dd($project[0]->finances);
   //dd($project->sum('total'),$project->sum('total_fatorh'))  ;
     //   $this->postCount = Team::where('id',$date)->get();
    }
}
