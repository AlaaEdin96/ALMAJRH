<div class="card">
    <div class="card-header">
        <h4>Team:</h4>
        
        <button wire:click='$emit("openModal", "modal.crud-team", {{ json_encode(["project_id" =>$project_id]) }})' class=" text-primary text-right">Add</button> 
    </div>

    <div class="card-body">
        <div class="row">
            @forelse ($taems as $taem)
            <div class="col-md-4 col-6 user-latest-img">
                <img src="../../../app-assets/images/profile/user-uploads/user-01.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
            </div>    
            @empty
                
            @endforelse
     
        </div>
    </div>
</div>

