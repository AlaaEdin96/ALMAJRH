<?php

namespace App\Http\Livewire\Modal;

 use App\Http\Livewire\Component\WalletUser;
use App\Http\Traits\AccountStatementTrait;
use App\Models\AccountStatement;
use LivewireUI\Modal\ModalComponent;
 
use App\Models\UserWallet;

class AddMonyToUser extends ModalComponent
{
    use AccountStatementTrait;

    public $user_id,$mony;

    protected $rules = [
        'mony' => 'required|integer',
      ];


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
        
 
        $Wallet=$this->CreateWallet();
         $this->LogAccountStatement($Wallet->mony,$Wallet->user->name,null,$this->gettayp($Wallet->user->role),$Wallet->id);
         $Wallet->user->deposit($this->mony);

        $this->closeModalWithEvents([
            WalletUser::getName() => 'refresh',
        ]);
    }

private function gettayp($var)
{
   if ($var =='sponsers') {
    return 'عهدة';
   }
   return 'دفع';
}


    private function CreateWallet()
    {

      return  UserWallet::create([
            'user_id'=> $this->user_id,
            'creted_by_user_id' => auth()->user()->id ,
            'mony'=>$this->mony,
            'description' => null,
        ]);
    }

}
