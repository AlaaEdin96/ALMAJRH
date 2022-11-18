<?php

namespace App\Listeners;

use App\Events\test;
use App\Events\testevint;
use App\Models\Images;
use App\Models\Mission;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\App;
use Livewire\WithFileUploads;

class Storpost
{

    use WithFileUploads;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\test  $event
     * @return void
     */
    public function handle($date) 
    {
        

      $item =  Mission::create([
              'taitel'=> $date['taitel'],
              'date'=>now(),
              'user_id'=> auth()->user()->id,
              'body_task_id'=> $date['project_id'],
           ]);           
           return  $item->id;
    }

}
