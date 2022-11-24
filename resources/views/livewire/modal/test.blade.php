{{-- <div>
    <div class=" ">
        <div class="  border-danger  text-center bg-transparent">
            <div class="card-content">
                
                <div class="card-body ">
                    <div class="avatar avatar-xl">
                        <img class="img-fluid" src="https://thumbs.dreamstime.com/b/wrong-cross-symbol-isolated-white-background-d-render-wrong-cross-symbol-isolated-115034877.jpg" alt="img placeholder">
                    </div>
                     <h2 class="card-title">{{$text}}</h2>
                    <p class="card-text">                                                       <button wire:click="store()" class="btn btn-primary float-right btn-inline mb-50 waves-effect waves-light">Save
                    </p>
                </div>
                <button wire:click="store()" class="btn btn-primary float-right btn-inline mb-50 waves-effect waves-light">Save

            </div>
        </div>
    </div>
</div>
 --}}


<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">تنبية</h4>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-success">
      {{ session('message') }}
  </div>
@endif
    <form >
        <div class="modal-body">
            <div class="avatar avatar-xl">
                <img class="img-fluid" src="https://thumbs.dreamstime.com/b/wrong-cross-symbol-isolated-white-background-d-render-wrong-cross-symbol-isolated-115034877.jpg" alt="img placeholder">
            </div>
             <h2 class="card-title">{{$text}}</h2>
        </div>

       @if (!is_null($event))
       <div class="modal-footer">
        <button wire:click="click" type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">نعم</button>
    </div>
       @endif
    </form>
</div>