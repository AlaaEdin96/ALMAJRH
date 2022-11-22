<?php

namespace App\Http\Livewire\Component;

use App\Models\Finance;
use Livewire\Component;

class Treasury extends Component
{
   public $moyne,$total,$ohda,$mablg,$count;

    public function mount()
    {
       $moyne = Finance::get();
  

       if ($moyne->isNotEmpty()) {
        $this->total=$moyne[0]->total;
        $this->ohda=$moyne[0]->ohda;
        $this->mablg=$moyne[0]->mablg;
       $this->count=$moyne->count();
       }else{
        $this->total=0;
        $this->ohda=0;
        $this->mablg=0;
        $this->count=0;

       }

    }
    public function render()
    {

        return view('livewire.component.treasury');
    }
}
