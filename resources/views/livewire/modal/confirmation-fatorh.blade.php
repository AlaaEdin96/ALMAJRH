<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">اختر الممول الدي تريد الخصم منه</h4>
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
            @forelse ($sponsers as $sponser)

            <div class="vs-radio-con vs-radio-success">
                <input  wire:model="sponser_id" type="radio" name="radiocolor" value="{{$sponser->id}}">
                <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                </span>
                <span class="">{{$sponser->user->name}}</span>
            </div>
    @empty
    @endforelse
    </select>
    </fieldset>  
    @error('sponser_id') <div class="alert alert-danger" role="alert">
        <p class="mb-0">{{ $message }} </p>
    </div>   
    @enderror 

        </div>

        <div class="modal-footer">
            <button wire:click="store()" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Save</button>
        </div>
    </form>
</div>