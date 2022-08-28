<?php

namespace App\Http\Livewire\Modal;
use App\Http\Livewire\AccountingSponsers;
use App\Http\Livewire\Invokes\Daemen;
use App\Http\Livewire\Invokes\Worker;
use App\Models\Projct;
use App\Models\Subventions;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;


class CrudExpenses extends ModalComponent
{
     //expenses_id
    public $expenses_id,$id_project,$budget;
    public $taitel,$sponser_id;

    public function render()
    {
      
        return view('livewire.modal.crud-expenses',[
            'workers'=> Team::select('team_id' )->where('tayp','worker')->get(),
            'sponsers'=> Team::select('team_id',DB::raw('count(*) as count_project') )->where('tayp','sponsers')
        ->groupBy('team_id')
        ->get(), 
        'projects' =>Projct::all(),
        ]);
    }


    protected $rules = [
        'id_project'=> 'required',
        'expenses_id' => 'required',
        'budget' =>'required|integer' 
      ];


private function getidteam()
{
  return Team::select('id')->where('team_id',$this->expenses_id)->where('project_id',$this->id_project)->first()->id;
}
public function store()
{
     
$this->validate();



Subventions::create( [
    'tem_id' =>$this->getidteam(),
    'creted_by_user_id' => 1 ,
    'mony' => $this->taitel=="ارجاع عهدة" ? $this->budget * -1 : $this->budget,
    'sponser_id'=>$this->sponser_id,
]);


 session()->flash('message', 'Post successfully updated.');

  $this->closeModalWithEvents([
    Worker::getName() => 'refrech',
]);
}
}
