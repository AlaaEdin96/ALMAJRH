<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">Add File </h4>
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
               <form wire:submit.prevent="save">
                   <input type="file" wire:model="photo" class="form-control">
                   @error('photo') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror                    
                 
              </form>

              @if ($photo)
 3        Photo Preview:
 4        <img src="{{ $photo->temporaryUrl() }}">
 5    @endif
            
    
     

     

        <div class="modal-footer">
            <button wire:click="save()" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Login</button>
          <!---<button wire:click='$emit("openModal", "edit-user")'>Delete User</button>---->  

        </div>
    </form>
</div>











 