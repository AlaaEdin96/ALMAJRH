<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">{{$taitel}} </h4>
        <button  wire:click="$emit('closeModal')" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>

    <div>
             @if (session()->has('message'))
                     <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                @endif
            </div>


    <form >
        <div class="modal-body">


            <div class="d-flex justify-content-between">
                <label>الداعم: </label>
                <button wire:click='$emit("openModal", "modal.crud-compane", {{ json_encode(["user" => 1]) }})' class=" text-primary text-right">Create</button>                        
            </div>


<fieldset class="form-group">
    <select  wire:model="sponser_id" class="form-control" >
        <option>.......</option>
        @forelse ($sponsers as $sponser)
        <option  value="{{$sponser->team_id}}">{{$sponser->user->name}}</option>
@empty
@endforelse
</select>
</fieldset>  
@error('sponser_id') <div class="alert alert-danger" role="alert">
    <p class="mb-0">{{ $message }} </p>
</div>   
@enderror 


<div class="d-flex justify-content-between">
    <label>المشروع: </label>
    <button wire:click='$emit("openModal", "modal.crud-compane", {{ json_encode(["user" => 1]) }})' class=" text-primary text-right">Create</button>                        
</div>

<fieldset class="form-group">
<select  wire:model="id_project" class="form-control" id="basicSelect">
<option>.......</option>
@forelse ($projects as $project)
<option  value="{{$project->id}}">{{$project->code}}</option>
@empty
@endforelse
</select>
</fieldset>  
@error('id_project') <div class="alert alert-danger" role="alert">
<p class="mb-0">{{ $message }} </p>
</div>   
@enderror 







            <label>BUDGET: </label>
            <div class="form-group">
                <input wire:model="budget" type="text" placeholder="اسم الشركة" class="form-control">
                @error('budget') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror         
            </div>
    
            
    
     

        </div>

        <div class="modal-footer">
            <button wire:click="store()" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Login</button>
        </div>
    </form>
</div>