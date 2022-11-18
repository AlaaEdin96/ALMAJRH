<div class="card">
  
    <div class="card-header">
        @if (IsAdmin())
        <button wire:click='$emit("openModal", "modal.add-mony-to-user", {{ json_encode(["user_id" =>$user_id]) }})' class=" text-primary text-right">Add Mony</button> 
        @endif
        <button wire:click='$emit("openModal", "modal.show-account-statements", {{ json_encode(["user_id" =>$user_id]) }})' class=" text-primary text-right">account </button> 
  
    
    </div>  

      {{--<div class="card-header">
        <button wire:click="test()" class=" text-primary text-right"> Mony</button> 
      </div>--}}
   
    
    
    <div class="card">
        <div class="card-header d-flex align-items-start pb-0">
            <div>
                
 
                <h2 class="text-bold-700 mb-0">${{$mony}}</h2>
                <p>Project Wallet</p>
            </div>
            <div class="avatar bg-rgba-primary p-50 m-0">
                <div class="avatar-content">
                    <i class="feather icon-credit-card text-success font-medium-5"></i>
                </div>
            </div>
        </div>
    </div>
</div>

