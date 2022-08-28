<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">Inline Login Form </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <form action="#">
        <div class="modal-body">
            <label>name: </label>
            <div class="form-group">
                <input wire:model="name" type="text" placeholder="Email Address" class="form-control">
            </div>
    
            <label>code: </label>
            <div class="form-group">
                <input wire:model="code" type="text" placeholder="text" class="form-control">
            </div>
    
            <label>compane: </label>
            <div class="form-group">
                <input wire:model="compane" type="text" placeholder="text" class="form-control">
            </div>
    
        </div>
        <div class="modal-footer">
            <button wire:click="$emit('closeModal')" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Login</button>
        </div>
    </form>
</div>