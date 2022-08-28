<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ImgTest extends ModalComponent
{
     public $keyimg,$images;
    public $i=0;

    public function next()
    {
       
        if($this->i < count($this->images) -1 ){
            $this->i++;
        }
        
    }


    public function back()
    {
       
        if($this->i > 0 ){
            $this->i--;
        }
        
    }

    public function render()
    {
         
        return view('livewire.modal.img-test');
    }


    public static function modalMaxWidth(): string
    {
        return '2xl';
    }
 
}

