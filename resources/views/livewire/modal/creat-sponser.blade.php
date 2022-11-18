 
<div class="modal-content">
    <div class="modal-header">
         <div class="d-flex justify-content-between">
                    
                        <label>Add Spons: </label>
                  </div>
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


    
        <div class="modal-body">
    
            <div class="d-flex justify-content-between">
                    
                <label>Spons: </label>
                <button wire:click='$emit("openModal", "modal.crud-user", {{ json_encode(["user" => 1,"tayp"=>"sponsers"]) }})' class=" text-primary text-right">Create</button>
         </div>

            <fieldset class="form-group">
                <select  wire:model="spons_id" class="form-control" id="basicSelect">
                    <option selected="">.....</option>
                    @forelse ($sponses as $sponse)
                    <option  value="{{$sponse->id}}">{{$sponse->name}}</option>
@empty
            
@endforelse
</select>

@error('spons_id') <div class="alert alert-danger" role="alert">
    <p class="mb-0">{{ $message }} </p>
</div>   
@enderror 

</fieldset>
        <div class="modal-footer">
            <button wire:click="store()" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Save</button>
        </div>    
</div>