<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Invoke;
use App\Http\Traits\AccountStatementTrait;
use App\Models\AccountStatement;
use App\Models\Fatorh;
use App\Models\Projct;
use App\Models\Subventions;
use App\Models\Team;
use App\Models\User;
 
use LivewireUI\Modal\ModalComponent;

class ConfirmationFatorh extends ModalComponent
{
 use AccountStatementTrait;

    public $sponser_id,$fatorh_id,$project_id,$tem_id;

    public function render()
    {
        /**  'sponsers'=> Team::select('team_id',DB::raw('count(*) as count_project') )->where('tayp','sponsers')->groupBy('team_id')->get()* */
        return view('livewire.modal.confirmation-fatorh',[
           'sponsers'=> Team::where('tayp','sponsers')->where('project_id',$this->project_id)->get(), 
        ]);
    }


    protected $rules = [
         'sponser_id' => 'required',
       ];

public function store()
{

$this->validate();
  
 
$fatorh = $this->UpdateFatorh();

$time =Team::find($this->tem_id);
//Team::where([['project_id','=',$this->project_id],['team_id','=', $this->tem_id]])->first();
 
//v1 $time->deposit_descount($fatorh->mony);

//$this->logAccountStatement($fatorh->mony,$fatorh->team->user->name,$fatorh->sponser->user->name,"فاتوره",$fatorh->id,$fatorh->project->code);


$time->user->withdraw($fatorh->mony);
//v1 $fatorh->sponser->deposit_descount($fatorh->mony);
$fatorh->sponser->user->withdraw($fatorh->mony);
   

 session()->flash('message', 'Post successfully updated.');

  $this->closeModalWithEvents([
    Invoke::getName() => 'refresh',
]);

}

private function UpdateFatorh()
{
$fatorh=  Fatorh::find($this->fatorh_id);
$fatorh->sponser_id = $this->sponser_id;
$fatorh->check_user_id = auth()->user()->id;
$fatorh->save();
return $fatorh;
}




   
    public static function modalMaxWidth(): string
    {
        return 'md';
    }
}
