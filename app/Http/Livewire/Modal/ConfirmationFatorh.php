<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Invoke;
use App\Models\Fatorh;
use App\Models\Projct;
use App\Models\Subventions;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;

class ConfirmationFatorh extends ModalComponent
{
 
    public $sponser_id,$fatorh_id;

    public function render()
    {
        return view('livewire.modal.confirmation-fatorh',[
           'sponsers'=> Team::select('team_id',DB::raw('count(*) as count_project') )->where('tayp','sponsers')
        ->groupBy('team_id')
        ->get(), 
        ]);
    }


    protected $rules = [
         'sponser_id' => 'required',
       ];


/*private function getidteam()
{
  return Team::select('id')->where('team_id',$this->sponser_id)->where('project_id',$this->id_project)->first()->id;
}*/
public function store()
{

$this->validate();
  
 Fatorh::find($this->fatorh_id)->update(['sponser_id' => $this->sponser_id,'check_user_id'=> auth()->user()->id]);

 session()->flash('message', 'Post successfully updated.');

  $this->closeModalWithEvents([
    Invoke::getName() => 'refresh',
]);

}


   
    public static function modalMaxWidth(): string
    {
        return 'md';
    }
}
