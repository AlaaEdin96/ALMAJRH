<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\AccountingSponsers;
use App\Http\Livewire\Invokes\Daemen;
use App\Models\Projct;
use App\Models\Subventions;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;

class CrudSponsers extends ModalComponent
{
    public $sponser_id,$id_project,$budget;
    public $taitel;

    public function render()
    {
        return view('livewire.modal.crud-sponsers',[
           'sponsers'=> Team::select('team_id',DB::raw('count(*) as count_project') )->where('tayp','sponsers')
        ->groupBy('team_id')
        ->get(), 
        'projects' =>Projct::all(),
        ]);
    }


    protected $rules = [
        'id_project'=> 'required',
        'sponser_id' => 'required',
        'budget' =>'required|integer' 
      ];


private function getidteam()
{
  return Team::select('id')->where('team_id',$this->sponser_id)->where('project_id',$this->id_project)->first()->id;
}
public function store()
{

$this->validate();



Subventions::create( [
    'tem_id' =>$this->getidteam(),
    'creted_by_user_id' => 1 ,
    'mony' => $this->taitel="اجراع عطاء" ? $this->budget * -1 : $this->budget,

]);


 session()->flash('message', 'Post successfully updated.');

  $this->closeModalWithEvents([
    Daemen::getName() => 'AccountingSponsers',
]);

}


   
    public static function modalMaxWidth(): string
    {
        return 'md';
    }
}
