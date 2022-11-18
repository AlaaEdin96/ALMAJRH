
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


    <form>
        <div class="modal-body">

                     
                <label>المبلغ: </label>
            <div class="form-group">
                <input wire:model="mony" type="text" placeholder="المبلغ" class="form-control">
                @error('mony') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror         
            </div>
    
            
    
     

     

        
    </form>
    <div class="modal-footer">
        <button wire:click="Save()" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Save</button>
    </div>
</div>