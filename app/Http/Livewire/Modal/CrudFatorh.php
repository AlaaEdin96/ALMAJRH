<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Invoke;

use App\Models\Fatorh;
use App\Models\Images;

use App\Models\Task;
use App\Models\Team;
 
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CrudFatorh extends ModalComponent
{ 

    use WithFileUploads;
    public $photos=[],$taitel,$mission_id,$pris;
    public function render()
    {
      
        return view('livewire.modal.crud-fatorh',
        [
            'taskes'=>Task::all(),
            'teams'=>Team::all(),
        ]);
    }


    public function save()
         {

          
             $this->validate([
                'photos.*' => 'image|max:1024', // 1MB Max
                'taitel' => 'required',
                'pris' => 'required|integer',
                
             ]);
      
             $item=  Fatorh::create([
               'tem_id'=>auth()->user()->id,
               'taitel'=>$this->taitel,
               'creted_by_user_id'=>auth()->user()->id,
               'mony'=>$this->pris,
               'mission_id'=>$this->mission_id,
               ]);

             foreach ($this->photos as $photo) { 
                $phat=$photo->store('public/photos');
             
              Images::create([
                'url' => str_ireplace("public","",$phat),
                'image_type' => 'image/jpg',
                'parentable_id' => $item->id,
                'parentable_type' => Fatorh::class
             ]);
             }


             $this->closeModalWithEvents([
                Invoke::getName() => 'refresh',
            ]);
         }
}
