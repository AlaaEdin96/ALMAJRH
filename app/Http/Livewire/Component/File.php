<?php

namespace App\Http\Livewire\Component;

use App\Models\File as ModelsFile;
use Livewire\Component;

class File extends Component
{

public $project_id;

    public function render()
    {
        
        return view('livewire.component.file',['files' =>ModelsFile::all()],);
    }
}
