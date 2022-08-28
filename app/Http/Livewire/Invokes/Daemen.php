<?php

namespace App\Http\Livewire\Invokes;

use Livewire\Component;
use App\Models\Expenses;
use App\Models\Maleh;
use App\Models\Subventions;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
class Daemen extends Component
{
    protected $listeners = ['AccountingSponsers' => 'render'];


    public function render()
    {
      $maleh=  Maleh::all();
        return view('livewire.invokes.daemen',
    [
        'sponsers'=> Team::select('team_id',DB::raw('count(*) as count_project') )->where('tayp','sponsers')
        ->groupBy('team_id')
        ->get(),
        'momuels' => $maleh->whereNull('sponser_id'),//جلب الداعيمين
        'masrofats' => $maleh->whereNotNull('sponser_id'),//جلب مصروفات المهندسين
    ]);
    }

  
}
