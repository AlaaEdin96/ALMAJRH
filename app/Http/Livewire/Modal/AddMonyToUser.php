<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Component\WalletUser;
use App\Http\Traits\AccountStatementTrait; 
use App\Models\Finance;
use App\Models\Projct;
use App\Models\Task;
use App\Models\Team;
use LivewireUI\Modal\ModalComponent;


class AddMonyToUser extends ModalComponent
{
    use AccountStatementTrait;

    public $user_id,$mony,$description,$project_id;

    protected $rules = [
        'mony' => 'required|integer',
        'description' => 'required',
        'project_id' => 'required',
    ];


public function mount()
{
    $this->date=Team::where('team_id',$this->user_id)->get();
}

    public function render()
    {
        
        return view('livewire.modal.add-mony-to-user');
    }


    public function Save()
    {
   
        if (!IsAdmin()) {
          return to_route('404');
        }
       
        $this->validate();
        
 
        $Wallet=$this->CreateFinance();
       //  $this->LogAccountStatement($Wallet->mony,$Wallet->user->name,null,$this->gettayp($Wallet->user->role),$Wallet->id);
         $Wallet->team->user->deposit($this->mony);

         $Wallet->team->deposit($this->mony);

         //$this->logAccountStatement($fatorh->mony,$fatorh->team->user->name,$fatorh->sponser->user->name,"فاتوره",$fatorh->id,$fatorh->project->code);
      



        $this->closeModalWithEvents([
            WalletUser::getName() => 'refresh',
        ]);
    }

// private function gettayp($var)
// {
//    if ($var =='sponsers') {
//     return 'عهدة';
//    }
//    return 'دفع';
// }


    private function CreateFinance()
    {

      return  Finance::create([
        'tem_id' => $this->project_id,
        'creted_by_user_id'=> auth()->user()->id,
        'mony'=>$this->mony,
        'description' => $this->description,
        'tayp'=>$this->tayp(),
        ]);
    }
private function tayp()
{
    if ($this->date[0]->tayp=='sponsers') {
       return 'عهدة';
    }
    return 'مبلغ';
}
}
