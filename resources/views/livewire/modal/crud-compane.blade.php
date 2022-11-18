<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">Add Compane </h4>
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


    <form action="#">
        <div class="modal-body">
            <label>Name: </label>
            <div class="form-group">
                <input wire:model="text" type="text" placeholder="اسم الشركة" class="form-control">
                @error('text') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror         
            </div>
    
            
    
     

     

        <div class="modal-footer">
            <button wire:click="store()" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Save</button>
        </div>
    </form>
</div>