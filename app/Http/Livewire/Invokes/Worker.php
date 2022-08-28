<?php

namespace App\Http\Livewire\Invokes;

use App\Models\Fatorh;
use App\Models\Maleh;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Worker extends Component
{

    protected $listeners = ['refrech' => 'render'];

    public function render()
    {
        $maleh=  Maleh::orderBy('id','DESC')->get();
        return view('livewire.invokes.worker',[
            //sponsers => worker
            'sponsers'=> Team::select('team_id',DB::raw('count(*) as count_project') )->where('tayp','worker')
            ->groupBy('team_id')
            ->get(),
            'subventions' =>  $maleh,
            'masrofats' => $maleh->whereNotNull('sponser_id'),//جلب مصروفات المهندسين
           ]);
    }
}
