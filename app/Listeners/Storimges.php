<?php

namespace App\Listeners;


use App\Models\Images;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Livewire\WithFileUploads;

class Storimges
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
    public function handle($date,$class,$id)
    {
     

           foreach ($date as $photo) { 
           
            $phat=$photo->store('public');
           
          Images::create([
            'url' => str_ireplace("public","",$phat),
            'image_type' => 'image/jpg',
            'parentable_id' => $id,
            'parentable_type' =>$class
         ]);
         }
    }

}
