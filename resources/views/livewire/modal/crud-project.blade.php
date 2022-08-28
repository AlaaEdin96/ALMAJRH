<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">New project </h4>
    </div>

    <div>
             @if (session()->has('message'))
                     <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                @endif
            </div>


    <form action="#">
        <div class="modal-body">
            <label>name: </label>
            <div class="form-group">
                <input wire:model="name" type="text" placeholder="Email Address" class="form-control">
                @error('name') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror         
            </div>
    
            <label>code: </label>
            <div class="form-group">
                <input wire:model="code" type="text" placeholder="text" class="form-control">
                @error('code') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror              </div>
    
                <div class="d-flex justify-content-between">
                    
                        <label>Compane: </label>
                        <button wire:click='$emit("openModal", "modal.crud-compane", {{ json_encode(["user" => 1]) }})' class=" text-primary text-right">Create</button>
                 </div>


            @if ($compnes->count() != 0)
            <fieldset class="form-group">
                <select  wire:model="compane_id" class="form-control" id="basicSelect">
                    <option>.......</option>
                    @forelse ($compnes as $compne)
                    <option  value="{{$compne->id}}">{{$compne->name}}</option>
@empty
 


@endforelse
</select>



</fieldset>  


            @endif
            @error('compane_id') <div class="alert alert-danger" role="alert">
                <p class="mb-0">{{ $message }} </p>
            </div>   
            @enderror 
   
        

           

        <div class="modal-footer">
            <button wire:click="store()" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Login</button>
        </div>

    </form>
</div>