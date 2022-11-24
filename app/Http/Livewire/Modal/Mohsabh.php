<?php

namespace App\Http\Livewire\Modal;

use App\Models\Fatorh;
use App\Models\Finance;
use App\Models\Projct;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;

class Mohsabh extends ModalComponent
{

    const tayp='عهدة';
    public $maden_id,//الي عطي الفلوس 
    $modan_id,//الي نبو منه الفلوس 
    $projectid,$budget;

    public $taitel,$description='';

    public $projects,$sponsers=null;

    protected $listeners = ['stormohasp' => 'store'];


public function mount()
{
    $this->projects=Projct::all();
}
public function updatedprojectid()
{
   $date =Team::where([['project_id',$this->projectid],['tayp','sponsers']])->get();

    $this->sponsers = (is_null($date->first())) ? null : $date ;

}

public function render()
{
    return view('livewire.modal.mohsabh');
}

    protected $rules = [
        'projectid'=> 'required',
        'maden_id' => 'required|different:modan_id',
        'modan_id' => 'required|different:maden_id',
        'budget' =>'required|numeric|min:0|not_in:0' ,
        //'description' =>'required' 
    ];
 
      public function store()
{

Finance::create( [
     'tem_id' =>$this->maden_id,
     'creted_by_user_id' => 1 ,
     'mony' => $this->budget*-1,
     'description'=>$this->description,
     'tayp'=>self::tayp,
 ]);

 Finance::create( [
    'tem_id' =>$this->modan_id,
    'creted_by_user_id' => 1 ,
    'mony' => $this->budget,
    'description'=>$this->description,
    'tayp'=>self::tayp,
]);

$ff=Fatorh::where('sponser_id',$this->maden_id)->latest('id')->get();

foreach ($ff as $key => $fatorh) {
    
    if ($this->budget >= $fatorh->mony) {
        $fatorh->forceFill(['sponser_id' => $this->modan_id])->save();
        $this->budget=$this->budget --;
    }

}

$this->closeModal();
}

public function openmodel()
{
    //$this->validate();
   //$this->openmodel();
    $maden = $this->sponsers->find($this->maden_id)->user->name ;
    $modean = $this->sponsers->find($this->modan_id)->user->name ;
    $this->test("Would you like to send ".$this->budget."$ from an ".$modean." to ".$maden."?");
}

public function test($text)
{
   $this->emit('openModal', "modal.test",["text" =>$text,'event'=>'stormohasp']);  
}
}


