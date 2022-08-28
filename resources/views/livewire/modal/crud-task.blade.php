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
            <label>tatil: </label>
            <div class="form-group">
                <input wire:model="text" type="text" placeholder="Email Address" class="form-control">
                @error('text') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror         
            </div>
    
            
    
     

     

        <div class="modal-footer">
            <button wire:click="store()" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Login</button>
            <button wire:click='$emit("openModal", "edit-user")'>Delete User</button>

        </div>
    </form>
</div>