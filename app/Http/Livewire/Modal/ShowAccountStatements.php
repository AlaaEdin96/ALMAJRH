<?php

namespace App\Http\Livewire\Modal;

use App\Models\AccountStatement;
use App\Models\User;
use Livewire\WithPagination;
use LivewireUI\Modal\ModalComponent;

class ShowAccountStatements extends ModalComponent
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $user_id,$name;


public function mount()
{
    $this->name = User::find($this->user_id)->name;
}


    public function render()
    {
        return view('livewire.modal.show-account-statements',[
            'Accounts'=>AccountStatement::where('to',$this->name)
            ->orwhere('from_user',$this->name)
            ->paginate(8),
        ]);
    }

    public function color( $var )
    {
     return $color = [
            "دفع"=>'text-success',
            "فاتوره"=>'text-danger',
            "عهدة"=>'text-warning '
        ][$var];
    }

    public static function modalMaxWidth(): string
    {
        return '5xl';
    }
}
