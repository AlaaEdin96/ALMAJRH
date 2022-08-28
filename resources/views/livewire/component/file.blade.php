<!---card file--->

<div class="card" style="">
    <div class="card-header">
        <h4>Files:</h4>
    </div>
    <div class="card-body">

@forelse ( $files as $file)
<div class="">
    <div class="d-flex justify-content-start align-items-center mb-1">
     
    <div class="user-page-info">
    <p class="mb-0">{{$file->phat}}</p>
     </div>
     
    <div class="ml-auto user-like text-danger"><i  class="fa fa-file-word-o"></i></div>
    </div>
    </div> 
@empty
    
@endforelse
<div class="form-group">
    <button  type="button" onclick='Livewire.emit("openModal", "modal.crud-files")'  class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Add File</button>
 </div>
     




    </div>
</div>