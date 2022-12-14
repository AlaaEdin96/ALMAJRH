<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Task;
 use App\Models\Mission;
use App\Models\Task as ModelsTask;
use App\Models\Team;
  use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CrudPoset extends ModalComponent
{
     use WithFileUploads;
    public $photos=[],$taitel,$mission_id,$project_id;
public $taskes,$teams;

    public function mount()
    {
        $this->taskes = ModelsTask::where('project_id',$this->project_id)->get();
        $this->teams =Team::where('project_id',$this->project_id)->get();
    }


    public function render()
    {
         return view('livewire.modal.crud-poset');
    }


    public function save()
         {
          
         //  $this->validatedate();

           if ($this->teams->where('team_id',auth()->user()->id)->isEmpty()) {
           $this->test("لايمكن النشر انت لست من ظمن الفريق");
           return;
           }

         
           $post_id =  $this->creatMishen([$this->getdate()]);
      //    $post_id= event('Stor_post',[$this->getdate()],)[0];
 
           event('Stor_imges',[$this->photos,Mission::class, $post_id,]);
   
             $this->closeModalWithEvents([
                Task::getName() => 'refrech',
            ]);

         }

         private function creatMishen($date)
         {
            
            $item =  Mission::create([
               'taitel'=> $date[0]['taitel'],
               'date'=>now(),
               'user_id'=> auth()->user()->id,
               'task_id'=> $date[0]['body_task_id'],
            ]);     

            return  $item->id;
         }
         private function getdate(){
         
         return   $date = [
               'taitel' => $this->taitel,
               'photos' => $this->photos,
               'body_task_id' => $this->mission_id,
              // 'body_task_id' => $this->body_task_id
               
          ];
         }
     

         private function validatedate(){
            $this->validate([
               'photos.*' => 'image|max:1024', // 1MB Max
             //  'mission_id' => 'required',
               'taitel' => 'required',  
               'body_task_id'=>'required'
            ]);
         }

         public function test($text)
         {
            $this->emit('openModal', "modal.test",["text" =>$text]);  
         }


      }

