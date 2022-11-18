<?php

namespace App\Http\Livewire\Component;

use App\Models\User;
 use Livewire\Component;

class WalletUser extends Component
{
    protected $listeners = ['refresh' => 'render'];


    public $user_id;

    public function render()
    { 
    return view('livewire.component.wallet-user',[
        'mony'=>User::find($this->user_id)->balance,
    ]);
    }   

    public function test( )
    {
        sleep(5);
       $this->emit('openModal', "modal.test");  
    }
}
