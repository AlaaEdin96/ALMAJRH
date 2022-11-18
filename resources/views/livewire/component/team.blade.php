<div class="card">
    <div class="card-header">
        <h4>Team:</h4>
        
        <button wire:click='$emit("openModal", "modal.crud-team", {{ json_encode(["project_id" =>$project_id]) }})' class=" text-primary text-right">Add</button> 
    </div>

    <div class="card-body">
        <div class="row">
            @forelse ($taems as $taem)
            <div wire:click="go({{$taem->user->id}})" class="col-md-4 col-6 user-latest-img">
                @if (count($taem->user->images()->get()) == 0)
                <img  src="https://dnm.nflximg.net/api/v6/BvVbc2Wxr2w6QuoANoSpJKEIWjQ/AAAAQTGFBs4tyv0WRg8NCyCloLPbarnZERIABWwVAMWy4num7683hBMldbYbYX4FfQ7uB0Om5H_81-xqi1Fj11Lwwd4LQUpmRBkpkB2re2_g9r9b7WATawyB8b0Nz_ti1DgVSHMjQHnQvOphDLBYOQQn7D22T2U.jpg?r=1d6" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                @else
<a>                 <img  src="{{asset('storage/'.$taem->user->images()->First()->url) }} " class="img-fluid mb-1 rounded-sm">
</a>
                @endif
            </div>
            @empty
                
            @endforelse
     
        </div>
    </div>
</div>

