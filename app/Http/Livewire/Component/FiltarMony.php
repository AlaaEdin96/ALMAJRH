<?php

namespace App\Http\Livewire\Component;

use App\Models\Team;
use Livewire\Component;

class FiltarMony extends Component
{
    public $teams,$team_id;

    protected $rules = [
        'team_id' => 'required|integer',
    ];

public function mount()
{
    $this->teams=Team::all();
}

    public function render()
    {

        return view('livewire.component.filtar-mony');
    }


    public function filter()
    {
        $this->validate();
        session()->flash('message', 'filter successfully.');

        $this->emit('Filtar',$this->team_id);
    }
}
