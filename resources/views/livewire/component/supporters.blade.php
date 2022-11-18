



<div class="card">
    <div class="card-header">
        <h4>Supporters project </h4>
    </div>
    <div class="card-body">
        
       @foreach ($sponsers as $spnser)
       <div class="twitter-feed mt-2">
        <div class="d-flex justify-content-start align-items-center mb-1">
            <div class="avatar mr-50">
                <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" alt="avtar img holder" height="35" width="35">
            </div>
            <div class="user-page-info">
                <p class="text-bold-600 mb-0">{{$spnser->user->name}}</p>
             
            </div>
        </div>
     </div>
       @endforeach
       
       <div class="form-group">
 
        <button  type="button" wire:click='$emit("openModal", "modal.creat-sponser",{{json_encode(["project_id" =>$project_id]) }})'  class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Add Spons</button>
     </div>
         

        
         
    </div>
</div>