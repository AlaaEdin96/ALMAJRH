<?php

namespace App\Http\Livewire\Modal;

use App\Http\Traits\DateTimeImageTrait;
use App\Models\File;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CrudFiles extends ModalComponent
{
    
    use DateTimeImageTrait,WithFileUploads;



    public $photo,$project_id;


    public function render()
    {
        
        return view('livewire.modal.crud-files');
    }



   
      
      
         public function save()
        {
            

            $this->validate([
                'photo' => 'required|image|max:1024', // 1MB Max
            ]);
     
 
            $path = $this->photo->store('photos/File/'.$this->MonthName());
           File::create(['phat'=>$path,'user_id'=>1,'hed_task_id'=>$this->project_id]);

             $this->photo="";
        //     $this->emit('taskcomponentref');
               session()->flash('message', 'File Uplode successfully .');
        }
}
