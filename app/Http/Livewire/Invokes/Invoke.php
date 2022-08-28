<?php

namespace App\Http\Livewire\Invokes;

use App\Models\Fatorh;
use App\Models\Maleh;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Invoke extends Component
{

























    
    public function render()
    {
        $maleh=  Maleh::all();
        return view('livewire.invokes.invoke',[
        //sponsers => worker
        'sponsers'=> Team::select('team_id',DB::raw('count(*) as count_project') )->where('tayp','worker')
        ->groupBy('team_id')
        ->get(),
        'subventions' =>  $maleh,
        'masrofats' => $maleh->whereNotNull('sponser_id'),//جلب مصروفات المهندسين
        'fatorhs' =>Fatorh::all(),]);
    }

    protected $listeners = ['AccountingSponsers' => 'render'];


   


}
