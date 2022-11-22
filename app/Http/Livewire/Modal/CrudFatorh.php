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
    public $photos=[],$taitel,$mission_id,$pris,$project_id;
    private $time_id;
    public function render()
    {
        return view('livewire.modal.crud-fatorh',
        [
            'taskes'=>Task::where('project_id',$this->project_id)->get(),
            'teams'=>Team::where('project_id',$this->project_id)->get(),
        ]);
    }


    public function save()
         {

         $this->time_id =Team::where([['project_id','=',$this->project_id],['team_id','=', auth()->user()->id]])->first('id');
         if (is_null($this->time_id)) {
         $this->test("لايمكن النشر انت لست من ظمن الفريق");
         return;
          }

 
             $this->validate([
                'photos.*' => 'image|max:1024', // 1MB Max
                'taitel' => 'required',
                'pris' => 'required|integer',
                
             ]);

             
             $item=  Fatorh::create([
               'tem_id'=>$this->time_id->id,
               'taitel'=>$this->taitel,
               'creted_by_user_id'=>auth()->user()->id,
               'mony'=>$this->pris,
               'task_id'=>$this->mission_id,
               'project_id'=>$this->project_id
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



         public function test($text)
         {
            $this->emit('openModal', "modal.test",["text" =>$text]);  
         }
}
