
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

            <div>
                <label for="data-category"> اختر المشروع </label>
                <select wire:model="project_id" class="form-control"  >
                    <option>.......</option>
                    @forelse ($date as $project)
                    <option  value="{{$project->id}}">{{$project->projects->code}}</option>
            @empty
            @endforelse
                </select>
                @error('project_id') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror 
            </div>


                     
            <label>المبلغ: </label>
            <div class="form-group">
                <input wire:model="mony" type="text" placeholder="المبلغ" class="form-control">
                @error('mony') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror         
            </div>
    
             

            <label>الوصف: </label>
            <div class="form-group">
                <input wire:model="description" type="text" placeholder="الوصف" class="form-control">
                @error('description') <div class="alert alert-danger" role="alert">
                    <p class="mb-0">{{ $message }} </p>
                </div>   
                @enderror         
            </div>
    
     

     

        
    </form>
    <div class="modal-footer">
        <button wire:click="Save()" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Save</button>
    </div>
</div>