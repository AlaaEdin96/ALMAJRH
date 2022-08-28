<div class="card">
    <div class="card-header">
        <h4 class="card-title">Taskes :</h4>
    </div>
    <div class="card-body suggested-block">
       
     @forelse ($taskes as $taske )
     <div class="  mb-2">
        <button class=" btn btn-sm btn-secondary float-right waves-effect waves-light">edit</button>
        <span>{{$taske->taitl}}</span>
    </div>  
     @empty
         
     @endforelse
       

      <div class="form-group">

        <button onclick='Livewire.emit("openModal", "modal.crud-task", {{ json_encode(["project_id" => $project_id]) }})' type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Add Task</button>
    </div>

    </div>
</div>